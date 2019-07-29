<?php $__env->startSection('container'); ?>

<section class="container">

<div class="card cadastro-content col-md-8">
    <div class="cadastro-titulo">
        <h1>Formulário de Cadastro</h1>
    </div>

    <form id="form-cadastro" method="POST" action="/cadastro">
    <?php echo csrf_field(); ?>
        <!-- Informações de Pessoais de Cadastro -->
        <div class="form-group" >

            <div>
            <label for='name'><?php echo e(__('Name')); ?></label>
                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" placeholder="Nome" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>  
            </div>
            <div>
                <label>Sobrenome</label>
                <input type="text" class="form-control casds" name="lastName" placeholder="Sobrenome">
            </div>         

        </div>
    </form>    


    <form method="POST"action="/cadastro">
        <!-- Informações Endereço -->
        <div class="form-group">

            <div>
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control casds" id="end" name='endereco' placeholder="Endereço">
            </div>

            <div>
                <label for="numb">Número</label>
                <input type="number" class="form-control casds" name='num_end' placeholder="Número">
            </div>

            <div>
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control casds" name='bairro' placeholder="Bairro">
            </div>

            <div>
                <label for="estado">Estado</label>
                <input type="text" class="form-control casds" name='uf' placeholder="Estado">
            </div>

            <div>
                <label for="cid">Cidade</label>
                <input type="text" class="form-control casds" name='cidade' placeholder="Cidade">
            </div>

            <div>
                <label for="cep">CEP</label>
                <input type="number" class="form-control casds" name='cep' placeholder="CEP">
            </div>

        </div>

    </form>    

    <form method="POST"  action="/cadastro">
        <!-- Informações de Login -->

        <div class="form-group" >

            <div>
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control casds" id="exampleFormControlInput1" name="email"
                    placeholder="nome@email.com">
                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div>
                <label for="password">Senha</label>
                <input type="password" class="form-control casds" name="password" placeholder="senha">
            </div>

            <div>
                <label for="confirmapassword">Confirmar Senha</label>
                <input type="password" class="form-control casds" name="confipass" placeholder="confirmar senha">
            </div>

            <div class="btn12">
                <button id="bt_submit" type="submit" name='cadastro' class="btn btn-primary btn-casds">Enviar</button>
                <input type="reset" value="Limpar" class="btn btn-primary">
            </div>
        </div>


    </form>
</div>

</section>

<script src="<?php echo e(asset('js/cadastro.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tomeshi\Documents\Andrea\PFS2\ProjetoIntegrador\Camila\ProjIntegradorArq1\ProjIntegradorArq1\MeSustenta\resources\views/cadastro.blade.php ENDPATH**/ ?>