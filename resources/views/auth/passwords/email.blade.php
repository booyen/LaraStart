@extends('layouts.app')

@section('content')
<script>
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    $notification = $delete.parentNode;
    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
</script>

<section class="hero is-fullheight-with-navbar is-light is-bold">
        <div class="hero-body">
          <div class="container">
            
            <div class="columns is-centered">

              <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                  <div class="title has-text-centered"> <h3>Reset passsword</h3> </div>
            
               
                    @if (session('status'))
                      
                        <div class="notification is-success">
                                <button class="delete"></button>
                                {{ session('status') }}
                              </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="box">
                        @csrf

                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control has-icons-left">
                                <input id="email" type="email"  class="input is-medium @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <p class="help is-danger invalid-feedback" role="alert" >{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-medium  is-fullwidth is-success">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
