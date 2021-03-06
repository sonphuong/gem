<!DOCTYPE html>
<html lang="en" ng-app="gameApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico">

    <title>Rock-Paper-Scissors Game</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/game.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper" ng-controller="layoutCtrl">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Rock-Paper-Scissors Game</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li ng-class="{'active':isHomePage}"><a href="/">Home</a></li>
                  <li ng-class="{'active':isGamePage}"><a href="/game">Player vs Com</a></li>
                  <li ng-class="{'active':isCVSCPage}"><a href="/cvsc">Com vs Com</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
             @yield('content')
          </div>

          <div class="mastfoot">
            <div class="inner">
              
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/angular.js"></script>
	  <script src="/js/angular-cookies.min.js"></script>
    <script src="/js/message-center.js"></script>
    <script src="/js/angular-route.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/layout.js"></script>
    <script src="/js/game.js"></script>
  </body>
</html>
