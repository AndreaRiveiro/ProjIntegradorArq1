<?php $__env->startSection('container'); ?>

 <!-- formulario para contato  -->
 <div class="container px-lg-5">
    <div class="row mx-lg-n5" id="forms">
        <div class="col py-3 px-lg-5 border bg-light">
                <div class="contato-content">
                        <h1 id="formul-contato" href="/contato">Fale Conosco</h1>
                </div>
                <form id="form-contato" method="get" action="/contato">
                    <div class="form-row">
                            <label>Nome Completo(obrigatório)</label>
                            <input type="text" name="nomecompletocnt" class="form-control conts" placeholder="Nome Sobrenome">
                    </div>

                    <div class="form-row">
                        <label for="exampleFormControlInput1">Email (obrigatório)</label>
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
        <div class="col py-3 px-lg-5 border bg-light">
                <div class="contato-content">
                            <h1 id="formul-parceiro" href="/contato">Seja Um Parceiro</h1>
                        </div>
                        <form id="form-parceiro" method="get" action="/contato">
                            <div class="form-row">
                                    <label>Nome Completo(obrigatório)</label>
                                    <input type="text" name="nomecompletocnt" class="form-control conts" placeholder="Nome Sobrenome">
                            </div>

                            <div class="form-row">
                                <label for="exampleFormControlInput1">Email (obrigatório)</label>
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
                                <button id="bt_submit" type="submit" name='parceiro' class="btn btn-primary btn-conts">Enviar</button>
                                <input type="reset" value="Limpar" name="btnctn" class="btn btn-primary">
                            </div>
                        </form>
                </div>
        </div>
    </div>
</div>

    
 <script src="<?php echo e(asset('js/contato.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/contato.blade.php ENDPATH**/ ?>