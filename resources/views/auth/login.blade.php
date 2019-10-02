@extends('layouts.app')

@section('content')
<section class="hero is-fullheight-with-navbar is-light is-bold">
        <div class="hero-body">
          <div class="container">
            
            <div class="columns is-centered">

              <div class="column is-5-tablet is-4-desktop is-3-widescreen">
              
                    <form method="POST" action="{{ route('login') }}" class="box">
                            @csrf
                            <div class="title "> <h3>Login</h3> </div>
                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>
    
                                <div class="control has-icons-left ">
                                    <input id="email" type="email" placeholder="e.g. jamal@me.com" class="input is-medium @error('email') is-invalid @enderror" required name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                                    <span class="icon is-small is-left">
                                            <i class="fa fa-envelope"></i>
                                          </span>
                                    @error('email')
                                    
                                            <p class="help is-danger invalid-feedback" role="alert" >{{ $message }}</strong>
                                       
                                    @enderror
                                </div>
                            </div>
    
                            <div class="field">
                                <label for="password" class="label">{{ __('Password') }}</label>
    
                                <div class="control has-icons-left">
                                    <input id="password" type="password" placeholder="*****" class="input is-medium @error('password') is-invalid @enderror" required name="password"  autocomplete="current-password">
                                    <span class="icon is-small is-left">
                                            <i class="fa fa-lock"></i>
                                          </span>
                                    @error('password')
                                    <p class="help is-danger invalid-feedback" role="alert" >{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="field">
                                <div class="control">
                                   
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    
                                </div>
                            </div>
    
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-success is-medium is-fullwidth">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                    <div class="has-text-centered">
                                        <a class="button is-text" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </form>
            </div>
            </div>
          </div>
        </div>
      </section>
@endsection

   
           
      