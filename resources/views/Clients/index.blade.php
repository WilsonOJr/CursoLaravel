@extends('Layouts.LayoutFull')

@push('css')

@endpush

@section('conteudo')
<div>
    <a href="{{ route('clients.create') }}" class="btn btn-success mb-2">
        <i class="far fa-plus-square mr-1"></i> Adicionar
    </a>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
                @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->cpf}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>
                            <button class='btn btn-primary btn-sm'>Editar</button>
                            <button class='btn btn-danger btn-sm'>Excluir</button>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('/js/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
        $(".cpf-mask").mask('000.000.000-00');
        @if(Session::has('success'))
            alert('sucesso');
        @endif
</script>
@endpush