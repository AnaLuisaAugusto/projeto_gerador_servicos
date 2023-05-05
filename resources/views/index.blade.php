@extends('layouts.bootstrap')

@section('title', 'Cadastro de Clientes')

@section('content')

    <form method="post" action="/store" id="formCadastro" name="form">
       <div class="mb-3">
            <label for="txtNome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="txtNome" required placeholder="Insira seu nome">
        </div>
        <div class="mb-3">
            <label for="txtTel" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="txtTel" required placeholder="(xx) xxxxx-xxxx">
        </div>
        <div class="col-13">
            <label for="txtTipoTel" id="txtTel" class="form-label">Origem:</label>
            <select id="txtTipoTel" class="form-select">
                <option>Celular</option>
                <option>Fixo</option>
            </select>
        </div> &nbsp;
        <div class="mb-3">
            <label for="txtDtContato">Data do Contato:</label>
            <input type="date" class="form-control" id="inputField" required name="txtDtContato">
        </div>
        <div class="mb-3">
            <label for="txtObs" id="inputField" class="form-label">Observação:</label>
            <textarea class="form-control" id="txtObs" rows="3"></textarea>
        </div>
        <button type="submit" id="btnCadastrar" class="btn btn-primary">Cadastrar</button>
    </form>
                           
@endsection