@extends('layouts.app')

@section('css')

<style type="text/css">
    
    body {
      background: #007bff;
      background: linear-gradient(to right, #0062E6, #33AEFF);
    }

    .card-signin {
      border: 0;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
      margin-bottom: 2rem;
      font-weight: 300;
      font-size: 1.5rem;
    }

    .card-signin .card-body {
      padding: 2rem;
    }

    .form-signin {
      width: 100%;
    }

    .form-signin .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      transition: all 0.2s;
    }

    .btn_signup{
      color: white;
      background-color: #383434;
    }


    .btn-google {
      color: white;
      background-color: #ea4335;
    }

    .btn-facebook {
      color: white;
      background-color: #3b5998;
    }
</style>

@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <div class="form-group">
                <input type="email" id="inputEmail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" required autofocus value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <input type="password" id="inputPassword" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="customCheck1">Remember password</label>

              </div>
               <a class="text-lead" href="{{ route('password.request') }}">Forgot Password</a>
              <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Sign in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn_signup btn-block" type="submit">Sign Up at {{env('APP_NAME')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
