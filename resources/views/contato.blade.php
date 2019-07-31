@extends('template')

@section('container')

 <!-- formulario para contato  -->
 <div class="container">
    <div class="row">
        <div class="col">
                <div class="contato-titulo">
                        <h1 id="contatonome" href="/contato">Fale Conosco</h1>
                </div>
                <form id="form-contato" method="get" action="/contato">
                    <div class="form-row">
                            <label>Nome Completo(obrigatório)</label>
                            <input type="text" name="nomecompletocnt" class="form-control conts" placeholder="nome sobrenome">
                    </div>

                    <div class="form-row">
                        <label for="exampleFormControlInput1">Seu Email (obrigatório)</label>
                        <input type="email" name="emailctn" class="form-control conts" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                    </div>

                    <div class="form-row">
                        <label for="exampleFormControlTextarea1">Assunto</label>
                        <input type="text" name="assuntoctn" class="form-control conts" id="exampleFormControlTextarea1">
                    </div>
                    <div class="form-row">
                        <label for="exampleFormControlTextarea1">Sua Mensagem</label>
                        <textarea class="form-control conts" name="mensagemctn" id="exampleFormControlTextarea1"></textarea>
                    </div>

                    <div class="botao">
                        <button id="bt_submit" type="submit" name='contato' class="btn btn-primary btn-conts">Enviar</button>
                        <input type="reset" value="Limpar" name="btnctn" class="btn btn-primary">
                    </div>
                </form>
        </div>
        <div class="col">
                <div class="contato-content">
                        <div class="contato-titulo">
                            <h1 id="contatonome" href="/contato">Seja Um Parceiro</h1>
                        </div>
                        <form id="form-contato" method="get" action="/contato">
                            <div class="form-row">
                                    <label>Nome Completo(obrigatório)</label>
                                    <input type="text" name="nomecompletocnt" class="form-control conts" placeholder="nome sobrenome">
                            </div>

                            <div class="form-row">
                                <label for="exampleFormControlInput1">Seu Email (obrigatório)</label>
                                <input type="email" name="emailctn" class="form-control conts" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                            </div>

                            <div class="form-row">
                                <label for="exampleFormControlTextarea1">Assunto</label>
                                <input type="text" name="assuntoctn" class="form-control conts" id="exampleFormControlTextarea1">
                            </div>
                            <div class="form-row">
                                <label for="exampleFormControlTextarea1">Sua Mensagem</label>
                                <textarea class="form-control conts" name="mensagemctn" id="exampleFormControlTextarea1"></textarea>
                            </div>

                            <div class="botao">
                                <button id="bt_submit" type="submit" name='contato' class="btn btn-primary btn-conts">Enviar</button>
                                <input type="reset" value="Limpar" name="btnctn" class="btn btn-primary">
                            </div>
                        </form>
                </div>
        </div>
    </div>
</div>

    
 <script src="{{asset('js/contato.js')}}"></script>

@endsection