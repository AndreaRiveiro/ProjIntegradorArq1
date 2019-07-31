<button onclick="document.getElementById('id01').style.display='block'" class="btn-default" style="font-size:0.6em;"><i class="fa fa-user-plus" style="font-size:1em;color:#000505"></i>Login</button>
    <div class="card-header" hidden>{{ __('Login') }}</div>
    <div id="id01" class="modal">
        <form class="modal-content animate" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="img/logofinal1.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label for="email"><b>{{ __('E-Mail Address') }}</b></label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Digite seu E-mail" name="email" required autocomplete="email" autofocus>
          <i class="fa fa-eye-slash" style="font-size: 1em"></i>
                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          
          <div class="linhaSenha">
            <label for="password"><b>{{ __('Password') }}</b></label><a href="#">Esqueceu?</a>
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Digite sua Senha" name="password" required autocomplete="current-password">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
         </div>

          <button type="submit"> {{ __('Login') }}</button>
          <label for="remember">
            <input type="checkbox" class="form-check-input" checked="checked" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
          </label>
        </div>
        <!--Footer modal Login Início -->
        <div class="containerFooter">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn-outline-phpdefault cancelbtn">Cancel</button>
          <div class="width-100%"></div>
          <button type="submit"  onclick="myFuncCadastro()" class="bntCadastro ">Cadastre-se</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
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
      location.href = {{ __("cadastro") }};
    }
    </script>
    
    
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->