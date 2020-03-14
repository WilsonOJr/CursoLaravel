@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('clients.update',[$client->id]) }}"
                  class="form-horizontal form-validate">
                {{csrf_field() }}
                @method('PUT')
        <div style='text-align:center;'>
            <div>
            <label>
                Ativo?
            </label>
            <input id='activebox' name='activebox' type='checkbox' @if($client->active_flag) checked='checked' @endif>
            <br>
                <label>
                    Nome:
                </label>
                <input id='name' name='name' required type='text' value='{{old("name",$client->name)}}'>
                <label>
                    CPF:
                </label>
                <input id='cpf' name='cpf' type='text' class='cpf-mask' value='{{old("cpf",$client->cpf)}}'>
            </div>
            </br>
            <label>
                Email:
            </label>
            <input id='email' name='email' type='text' value='{{old("email",$client->email)}}'>
            <label>
                Endereço:
            </label>
            <input id='endereco' name='endereco' type='text' value='{{old("endereco",$client->endereco)}}'>
        </div>
        <div style='text-align:center;'>
            <button type='Submit' class='btn btn-success'>Cadastrar</button>
        </div>
    </form>
@endsection
@push('scripts')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
        $(".cpf-mask").mask('000.000.000-00');
</script>
@endpush