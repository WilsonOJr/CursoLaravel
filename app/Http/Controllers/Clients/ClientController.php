<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientStoreRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clientModel = app(Client::class);

        $clients = $clientModel->all();
        
        //$clients = $clientModel->find(1);

        //$clients = $clientModel->where('cpf',1234567801)->get();

        //dd($clients);

        return view('Clients/index',compact('clients'));
    }

    public function create(){
        return view('Clients/create');

        //$clientModel = app(Client::class);
       //$client = $clientModel->create([
         //   'name'=> 'name teste2',
           // 'cpf'=> 1234567811,
           // 'email'=>'teste2@gmail.com',
           // 'active_flag'=>false,
        //]);
        //return view('Painel.Products.ProductCrud', compact('productCategories', 'productFormats', 'productPresenter'));
        //dd($client);
    }

    public function store(ClientStoreRequest $request){
        $data = $request->all();
        $clientModel = app(Client::class);
       $client = $clientModel->create([
            'name'=> $data['name'],
            'cpf'=>preg_replace("/[^A-Za-z0-9]/", "",$data['cpf']) ,
            'email'=>$data['email'],
            'endereco'=>$data['endereco'] ?? null,
           'active_flag'=> (($data['activebox'] ?? ' ') == null),
        ]);
        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {
        if(!empty($id)){
            $clientModel = app(Client::class);
            $client = $clientModel->find($id);
            if(!empty($client)){
                $client->delete();
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Cliente deletado com sucesso.',
                    'reload'  => true,
                ]);
            }
            else{
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Cliente não encontrado.',
                    'reload'  => true,
                ]);
            }
            

        }
        else{
            return response()->json([
                'status'  => 'error',
                'message' => 'ID não está na requisição',
                'reload'  => true,
            ]);

        }
    }

    public function edit($id){
        $clientModel = app(Client::class);
        $client = $clientModel->find($id);
        return view('Clients/edit',compact('client'));
    }

    public function update(Request $request,$id){
        $data = $request->all();
        $clientModel = app(Client::class);
        $client = $clientModel->find($id);
        $client->update([
            'name'=> $data['name'],
            'cpf'=>preg_replace("/[^A-Za-z0-9]/", "",$data['cpf']) ,
            'email'=>$data['email'],
            'endereco'=>$data['endereco'] ?? null,
           'active_flag'=> (($data['activebox'] ?? ' ') == null),
        ]);
        return redirect()->route('clients.index');
    }
}
