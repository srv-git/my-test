<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kitchen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .nav_main nav{margin-bottom: 0px;border-radius: 0px;}
  .nav_main nav:first-child{background-color: #fefefe;}
  .nav_main nav:not(:last-child){border-bottom: none;}
  .nav_main nav:first-child .navbar-header {float: left;}
  .stk_nav{/*position: sticky;top: 0;left: 0;right: 0;width: 100%;z-index: 9;*/background: #e45d5d;}
  .stk_nav.navbar-default .navbar-nav>li:not(.active)>a{color: #fff;}
  p{text-align: justify;}
</style>
<body>
<section class="nav_main">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">
          <img src="img/logo.png">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header ">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#onlyMenu0">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="only_nav_text collapse navbar-collapse text-right" id="onlyMenu0">
        <ul class="nav navbar-nav text-left ">
          <li class="visible-xs"><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact US</a></li>
          <li><a href="#">Career</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact US</a></li>
          <li><a href="#">Career</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact US</a></li>
          <li><a href="#">Career</a></li>
        </ul>
      </div>
    </div>
  </nav>
</section>
<style type="text/css">
@media (min-width: 768px){
.container>.only_nav_text.navbar-collapse {
margin-right: -15px;
margin-left: -15px;
}
}
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <h3>Collapsible Navbar</h3>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
    </div>
  </div>
</div>
</body>
</html>
