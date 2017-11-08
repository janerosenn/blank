<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buy Earrings</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset ('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset ('/css/heroic-features.css') }}" rel="stylesheet">

</head>

<body>


    <!-- Navigation -->
    <style type="text/css">
    
    body {
    margin-top: 20px;
}
.navbar {
      font-family: Helvetica, sans-serif;
      margin-bottom: 0;
      background-color: #800000;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }

  footer {
      background-color: #808080;
      color: #800080;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  
  </style>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <img src="images/cc.jpg" style width="30%" height="30%">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route ('register') }} ">REGISTER</a></li>

        <li><a href="{{ route ('login') }} ">SIGN IN</a></li>

        
        <li><a href="{{ route ('cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> CART</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>




    <!-- Page Content -->
 

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/e.jpg">
                    <div class="caption">
                        <h3>Diamond Studs</h3>                        
                        <p>
                            <a href="#" class="btn btn-primary">Buy Me!</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/gemdrop.jpg" >
                    <div class="caption">
                        <h3>Gemstone Drop Earrings</h3>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Me!</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/dnr.jpg">
                    <div class="caption">
                        <h3>Diamonds and Rubies</h3>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Me!</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/twos.jpg" >
                    <div class="caption">
                        <h3>Two Step Chain Earrings </h3>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Me!</a> 
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer class="text-center">
 
  <span class="glyphicon glyphicon-map-marker"></span>Nairobi, KENYA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +254705069407</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: my@gmail.com</p> 
</footer>
 

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ asset ('/js/jquery.js') }} "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset ('/js/bootstrap.min.js') }} "></script>

</body>

</html>
