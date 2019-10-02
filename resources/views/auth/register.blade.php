@extends('layouts.app')

@section('content')
<section class="hero is-fullheight-with-navbar is-light is-bold">
        <div class="hero-body">
          <div class="container">
            
            <div class="columns is-centered">
              <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="title has-text-centered"> <h3>Register</h3> </div>
                    <form method="POST" action="{{ route('register') }}" class="box">
                        @csrf

                        <div class="field">
                            <label for="name" class="label">{{ __('Name') }}</label>

                            <div class="control has-icons-left">
                                <input id="name" type="text" placeholder="Ahmad doe" class="input is-medium @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                      </span>
                                @error('name')
                                <p class="help is-danger invalid-feedback" role="alert" >{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control has-icons-left">
                                <input id="email" type="email" placeholder="e.g. jamal@me.com" class="input is-medium @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                <input id="password" type="password" placeholder="*****" class="input is-medium @error('password') is-danger @enderror" name="password" required autocomplete="new-password">
                                <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                      </span>
                                @error('password')
                                <p class="help is-danger invalid-feedback" role="alert" >{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="control has-icons-left">
                                <input id="password-confirm" type="password" placeholder="*****" class="input is-medium " name="password_confirmation" required autocomplete="new-password">
                                <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                      </span>
                            </div>
                        </div>

                        <div class="field">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button is-success is-medium is-fullwidth">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
