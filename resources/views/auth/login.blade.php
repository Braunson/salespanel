@extends('layouts.auth')

@section('auth_title')
    Inciar Sessão
@endsection

@section('auth_content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
      
              <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Beem vindo de volta!</h1>
                        </div>
                        <form class="user"method="POST" action="{{ route('login') }}">
                            @csrf

                          <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user" id="email" @error('email') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Digite o seu Email...">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group">
                            <input type="password" name="password" @error('password') is-invalid @enderror" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                              <label class="custom-control-label" for="remember">Lembrar-me</label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-user btn-block">Iniciar sessão</button>
                          <hr>
                          {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Entar com Google
                          </a>
                          <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Entrar com Facebook
                          </a> --}}
                        </form>
                        <hr>
                        <div class="text-center">
                          @if (Route::has('password.request'))
                          <a class="small" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                          @endif
                        </div>
                        <div class="text-center">
                          <a class="small" href="{{ route('register') }}">Criar nova conta!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
      
          </div>
@endsection