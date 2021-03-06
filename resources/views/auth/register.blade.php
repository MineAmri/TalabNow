<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @if(isset($title))<title>Talab Now | {{ $title }}</title> @else <title>Talabnow.online</title> @endif
    <meta name="google-site-verification" content="PT5Ev9pFIxm2aalISy-iVDqTd4x9I7S7JLF3oai8KRE" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3W89L9CXXP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-3W89L9CXXP');
    </script>
    <!-- Css Scripts -->
    <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <!-- JS Scripts -->
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>
    <!-- Body -->
<body>
<div class="signup-page">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-6 offset-sm-1 offset-lg-3">        
        <div class="form-bg">
          <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid"></a>
          <h2>This Inscription was Approved by the Administrator</h2>
          <a style="background-color: #007aff;border: none;width: 100%;color: #fff;font-size: 14px;text-align: center;padding: 8px 15px;border-radius: 4px;font-weight: 600;"  href="/login"  class="btn btn-primary btn-block text-center btn-lg"><i class="fa fa-facebook-official" aria-hidden="true"></i> Log in
            </a>
          <form method="POST" action="{{ route('register') }}"> @csrf
            
            <span class="options-divider">OR</span>
            @include('flash-message')<br>
            <span class="option-br"></span>
            <div class="form-group">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}
              </label> 
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>             
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">         
            </div> <br>
            <div class="row mb-3 px-3"> 
              <button class="btn btn-primary btn-block text-center btn-lg">Sign up</button>
            </div>

            <p class="term-policy">By signing up, you agree to our <a target="_blank" href="#" rel="noopener noreferrer">Terms</a> , <a target="_blank" href="#" rel="noopener noreferrer">Data Policy</a> and <a target="_blank" href="#" rel="noopener noreferrer">Cookies Policy</a>.</p>
          </form>
          <div class="login-link form-bg">
          <p>Have a account? <a href="/login">Log in</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

