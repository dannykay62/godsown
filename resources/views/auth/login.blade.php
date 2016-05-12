<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Tron Login Page Template</title>
    <!--SEO Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tron Bootstrap based UI Kit, flat, modern front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="8 Guild">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/main/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/main/favicon.ico" type="image/x-icon">

    <!-- Tron Bootstrap Skin and UI CSS -->
    <link href="/css/tron-ui.css" rel="stylesheet">
    <!-- Page specific CSS -->
    <link href="/css/login.css" rel="stylesheet">

      <!--fonts-->
      <link href="/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
      <link href="/css/fontsgooapi.css" rel='stylesheet' type='text/css'>
<!--Style-->

      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Outdated Browser Plugin Styles -->
    <link href="/main/TronBootstrapUIKit/outdatedbrowser/outdatedbrowser.css" rel="stylesheet">

  </head>

  <!-- Body -->

  <body>

    <!-- Login Form -->
    <section class="login-form">

      <!-- Logo -->
      <a href="{{ url('/') }}" class="logo">
        <img src="/main/TronBootstrapUIKit/img/logo.png" alt="Tron UI Kit">
      </a><!-- Logo End -->

      <!-- Form -->
      <div class="inner">
        <form role="form">
          <div class="form-group" method="POST" action="{{ url('/login') }}">
              {!! csrf_field() !!}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                  <label for="loginEmail">Email address</label>
                      <input type="email" class="form-control" id="loginEmail" value="{{ old('email') }}">

                          @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                          @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label for="loginPassword">Password</label>
				<input type="password" class="form-control" id="loginPassword" placeholder="Password">
                  @if ($errors->has('loginPassword'))
                  <span class="help-block">
                      <strong>{{ $errors->first('loginPassword') }}</strong>
                  </span>
                  @endif
			  </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox">Remember me
              </label>
            </div>
          </div>
          <div class="form-group"><button type="submit" class="btn btn-primary">Login</button>
              <a class="btn btn-primary" href="{{ url('/register') }}" role="button">Register</a>
          </div>
          </div>
        </form>
      </div>
    </section><!-- Login Form -->

    <!-- Outdated Browser
    ================================================== -->
    <div id="outdated">
      <span class="icon-outdated fa fa-exclamation-triangle"></span>
      <h2>Your browser is out-of-date!</h2>
      <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
      <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
    </div>

    <!-- jQuery Library
    ================================================== -->
    <script src="main/TronBootstrapUIKit/js/vendor/jquery.min.js"></script>

    <!-- Outdated Browser Plugin
    ================================================== -->
    <script src="/main/TronBootstrapUIKit/outdatedbrowser/outdatedbrowser.min.js"></script>
    <script src="/main/TronBootstrapUIKit/outdatedbrowser/outdatedbrowser.init.js"></script>

    <!-- Plugins and Custom scripts
    ================================================== -->
    <script src="main/TronBootstrapUIKit/js/vendor/bootstrap.min.js"></script>
    <script src="/main/TronBootstrapUIKit/js/tron-ui.js"></script>

    <!-- JavaScripts -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
         <script src="{{ elixir('js/app.js') }}"></script>

  </body><!-- Body End -->
</html>