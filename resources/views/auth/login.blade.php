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
    <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<body>
  <div class="bg-image">
<div class="signup-page">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-6 offset-sm-1 offset-lg-3">        
        <div class="form-bg">
          <a href="#"><img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid"></a>
          <h2>Sign in.</h2>
          <form method="POST" action="{{ route('login') }}">
                        @csrf

            <button class="login-with-fb"><i class="fa fa-facebook-official" aria-hidden="true"></i> Log in</button>
            <span class="options-divider">OR</span>
             @include('flash-message')<br>
            <span class="option-br"></span>
              <div class="form-group">
              <label>E-mail : </label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div><br>
 
            <div class="form-group">
              <label>Password : </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

            @error('password')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div><br>

        <div class="row mb-3 px-3"> 
              <button class="btn btn-primary btn-block text-center btn-lg">Sign in</button>
          </form>
        </div>
        <div class="login-link form-bg">
          <p>Don't have already an account? <a href="/register">register</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>

