@extends('template')

@section('container')

<section class="container">

<div class="card cadastro-content col-md-8">
    <div class="cadastro-titulo">
        <h1>Editar dados Cadastrais</h1>
    </div>

    <form id="form-cadastro" method="POST" action="/editarCadastro/{{$cliente->id}}">
    @csrf
        <!-- Informações de Pessoais de Cadastro -->
        <div class="form-group" >

            <div>
                <input type="text" name="id" value="{{$cliente->id}}" hidden>
                <label>Nome</label>
                <input type="text" class="form-control casds" name="name" value="{{$cliente->prim_nome}}">
            </div>
            <div>
                <label>Sobrenome</label>
                <input type="text" class="form-control casds" name="lastName" value="{{$cliente->ult_nome}}">
            </div>
            <div>
                <label>Data de Nascimento</label>
                <input type="date" class="form-control casds" name='data_nasc' value="{{$cliente->data_nasc}}">
            </div>
            <div>
                <label>RG</label>
                <input type="text" class="form-control casds" name='rg' value="{{$cliente->rg}}">
            </div>
            <div>
                <label>CPF</label>
                <input type="text" class="form-control casds" name='cpf' value="{{$cliente->cpf}}">
            </div>

        </div>


        <!-- Informações Endereço -->
        <div class="form-group">

            <div>
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control casds" id="end" name='endereco' value="{{$cliente->endereco}}">
            </div>

            <div>
                <label for="numb">Número</label>
                <input type="number" class="form-control casds" name='num_end' value="{{$cliente->num_end}}">
            </div>

            <div>
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control casds" name='bairro' value="{{$cliente->bairro}}">
            </div>

            <div>
                <label for="estado">Estado</label>
                <input type="text" class="form-control casds" name='uf' value="{{$cliente->uf}}">
            </div>

            <div>
                <label for="cid">Cidade</label>
                <input type="text" class="form-control casds" name='cidade' value="{{$cliente->cidade}}">
            </div>

            <div>
                <label for="cep">CEP</label>
                <input type="number" class="form-control casds" name='cep' value="{{$cliente->cep}}">
            </div>

        </div>

        <!-- Informações de Login -->

        <div class="form-group" >

            <div>
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control casds" id="exampleFormControlInput1" name="email" value="{{$cliente->email}}">
            </div>

            <div>
                <label for="password">Senha</label>
                <input type="password" class="form-control casds" name="password" placeholder="senha 8 digitos">
            </div>

            <div>
                <label for="confirmapassword">Confirmar Senha</label>
                <input type="password" class="form-control casds" name="confipass" placeholder="confirmar senha">
            </div>

            <div class="btn12">
                <button id="bt_submit" type="submit" name='editarCadastro' class="btn btn-primary btn-casds">Enviar</button>
                <input type="reset" value="Limpar" class="btn btn-primary">
            </div>
        </div>


    </form>
</div>

</section>

<script src="{{asset('js/cadastro.js')}}"></script>
@endsection