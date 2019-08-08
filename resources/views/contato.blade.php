@extends('template')

@section('container')

 <!-- formulario para contato  -->
 <div class="container px-lg-5">
    <div class="row mx-lg-n5" id="forms">
        <div class="col py-3 px-lg-5 border bg-light col-5" id="coloracao">
                <div class="contato-content">
                        <h1 id="formul-contato" href="/contato">Fale Conosco</h1>
                </div>
                <form id="form-contato" method="get" action="/contato">
                    <div class="form-row">
                            <label>Nome Completo*</label>
                            <input type="text" name="nomecompletocnt" class="form-control conts" >
                    </div>

                    <div class="form-row">
                        <label for="exampleFormControlInput1">Email*</label>
                        <input type="email" name="emailctn" class="form-control conts" id="exampleFormControlInput1" >
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

        <div class="col-2">


        </div>

        <div class="col py-3 px-lg-5 border bg-light col-5" id="coloracao">
                <div class="contato-content">
                            <h1 id="formul-parceiro" href="/contato">Seja Um Parceiro</h1>
                        </div>
                        <form id="form-parceiro" method="get" action="/contato">
                            <div class="form-row">
                                    <label>Nome Completo*</label>
                                    <input type="text" name="nomecompletocnt" class="form-control parceiro">
                            </div>

                            <div class="form-row">
                                <label for="exampleFormControlInput1">Email*</label>
                                <input type="email" name="emailctn" class="form-control parceiro" id="exampleFormControlInput1">
                            </div>

                            <div class="form-row">
                                <label for="exampleFormControlTextarea1">Assunto</label>
                                <input type="text" name="assuntoctn" class="form-control parce" id="exampleFormControlTextarea1">
                            </div>
                            <div class="form-row">
                                <label for="exampleFormControlTextarea1">Sua Mensagem</label>
                                <textarea class="form-control parceiro" name="mensagemctn" id="exampleFormControlTextarea1"></textarea>
                            </div>

                            <div class="botao">
                                <button id="bt_submit" type="submit" name='parceiro' class="btn btn-primary btn-parceiro">Enviar</button>
                                <input type="reset" value="Limpar" name="btnctn" class="btn btn-primary">
                            </div>
                        </form>
                </div>
        </div>
    </div>
</div>


 <script src="{{asset('js/contato.js')}}"></script>

@endsection
