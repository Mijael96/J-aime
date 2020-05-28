
@extends('plantillaadmin')

@section('principal')


               
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="email" class="" style="text-align:center;">{{ __('E-Mail') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                    <br>
                        <div class="form-group ">
                            <label for="password" class="">{{ __('Contraseña') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                <br>

                        <div class="form-group ">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                                <br>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                    
                                    <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="display:block;" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                                 
                                <br>
                                    <a class="btn btn-link" style="display:block;" href="{{('register') }}">
                                        {{ __('registrate') }}
                                    </a>
                            </div>
                        </div>

                        <br>
                    </form>
              
@endsection
