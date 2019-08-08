<button onclick="document.getElementById('id01').style.display='block'" class=" btn btn-defult" style="font-size:0.6em;"><i class="fa fa-user-plus" style="font-size:1em;color:#000505"></i>Login</button>
    <div class="card-header" hidden><?php echo e(__('Login')); ?></div>
    <div id="id01" class="modal">
        <form class="modal-content animate" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="img/logofinal1.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label for="email"><b><?php echo e(__('E-Mail Address')); ?></b></label>
          <input type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('email')); ?>" placeholder="Digite seu E-mail" name="email" required autocomplete="email" autofocus>
          <i class="fa fa-eye-slash" style="font-size: 1.6em"></i>
                 <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          
          <div class="linhaSenha">
            <label for="password"><b><?php echo e(__('Password')); ?></b></label><a href="#">Esqueceu?</a>
            <input type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Digite sua Senha" name="password" required autocomplete="current-password">
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

          <button type="submit"> <?php echo e(__('Login')); ?></button>
          <label for="remember">
            <input type="checkbox" class="form-check-input" checked="checked" name="remember" id="remember"  <?php echo e(old('remember') ? 'checked' : ''); ?>><?php echo e(__('Remember Me')); ?>

          </label>
        </div>
        <!--Footer modal Login Início -->
        <div class="containerFooter">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn-outinfo-line cancelbtn">Cancel</button>
          <div class="width-100%"></div>
          <button type="submit"  onclick="myFuncCadastro()" class="bntCadastro ">Cadastre-se</button>
            <?php if(Route::has('password.request')): ?>
                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot Your Password?')); ?>

                </a>
            <?php endif; ?>
        </div>
      </form> 
    </div>
     <!--Footer modal Login Fim -->
  
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
  
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
    function myFuncCadastro() {
      location.href = <?php echo e(__("cadastro")); ?>;
    }
    </script>
    
    
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login')); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
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
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --><?php /**PATH D:\Documentos\Digital House\ProjIntegradorArq1\MeSustenta\resources\views/auth/login.blade.php ENDPATH**/ ?>