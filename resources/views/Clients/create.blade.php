@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')
<form action="{{route('clients.store') }}"
                  class="form-horizontal form-validate" enctype="multipart/form-data" method="POST">
                {{csrf_field() }}
        <div style='text-align:center;'>
            <div>
            <label>
                Ativo?
            </label>
            <input type='checkbox'>
            <br>
                <label>
                    Nome:
                </label>
                <input type='text'>
                <label>
                    CPF:
                </label>
                <input id='cpf' name='cpf' type='text' class='cpf-mask'>
            </div>
            </br>
            <label>
                Email:
            </label>
            <input type='text'>
            <label>
                Endereço:
            </label>
            <input type='text'>
        </div>
        <div style='text-align:center;'>
            <input type='Submit' class='btn btn-danger'></input>
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