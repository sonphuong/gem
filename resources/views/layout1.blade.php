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
    <title>Carousel Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/game.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <!-- HEADER -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">RPS Game</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Game <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/game">Player vs Computer</a></li>
                  <li><a href="/cvsc">Computer vs Computer</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        </nav>
      </div>
      
      <!-- HEADER -->
      
      <!-- CONTENT -->
      <div id="content">
          @yield('content')
      </div>
      <!-- FOOTER -->
      <div id="footer" class="panel-footer">
          <p class="pull-right"><a href="#">Back to top</a></p>
          <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    
    </div>
  </div>
    
    <!-- javascript here -->
    <script src="/js/angular.js"></script>
    <script src="/js/message-center.js"></script>
    <script src="/js/angular-route.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/game.js"></script>
    
  </body>
</html>
