<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        
        
        
        <title>QV Resource Portal</title>

                

<!-- / Yoast WordPress SEO plugin. -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.min.js" rel="stylesheet">
<link rel='stylesheet' id='dm_style-css'  href='css/loginStyle.css' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/menuStyle.css">




<!-- Comment Rating plugin Version: 3.1.6 by Bob King, http://wealthynetizen.com/, dynamic comment voting & styling. --> 
<style type="text/css" media="screen">
   .ckrating_highly_rated {background-color:#FFFFFF !important;}
   .ckrating_poorly_rated {opacity:0.6;filter:alpha(opacity=60) !important;}
   .ckrating_hotly_debated {background-color:#FFFFFF !important;}
</style>

<meta name="google-publisher-plugin-pagetype" content="page">

<!-- WooCommerce Version -->
<meta name="generator" content="WooCommerce 2.0.20" />

</head>


<body class=" ">
    

          
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online Resource Portal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="loginn.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-road"></span> About Us</a></li>
        <li class="active"><a href="#"><span class="glyphicon glyphicon-book"></span> Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> </button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div id="main-wrapper" style="background: url(img/back1.jpg); background-repeat:no-repeat;

   background-size:cover;">

    <div id="content-wrapper" style="padding-top:150px" >
        <div style="clear:both;"></div>
        

   <div class="row"  >
    <div class="row" align="center" style="color:red;">
            <?php 
            
          if (!empty($_SESSION['flash_message'])) {
                // let's show our message to a user
                echo $_SESSION['flash_message'];
                // and don't forget to erase it from session
                unset($_SESSION['flash_message']);
            }
          ?>  
            </div>
                <div class="col-sm-4" style="padding-left:55px" >
          <img  src="img/45.jpg">
          
        </div>
        <div class="col-sm-8 content">
          
          <form role="form" action="message.php" class="form-inline" method="POST">
        <div class="row">
          
          <div class="form-group col-sm-10" style="margin-bottom:25px">
            <h3><input type="email" name="email" class="form-control" placeholder="Enter Email"></h3>
          </div>
        </div>
        <div class="row">
          
          <div class="form-group col-sm-10" style="margin-bottom:25px">
            <h3><input type="text" name="name" class="form-control" placeholder="Enter Full Name"></h3>
          </div>
        </div>
        <div class="row">

          <div class="form-group col-sm-10 comment" style="margin-bottom:25px">
            <textarea type="text" name="comments" class="form-control comment1" placeholder="Enter comments"></textarea>
          </div>
        </div>
        <div class="row">
          
            <div class="form-group col-sm-offset-4 col-sm-4"  style=" margin-top:15px; margin-right:10px;  float:right">
              <button type="submit" style="width:100px;" class="btn btn-success">Submit</button>   
            </div>
        </div>
      </form>
      </div>
  </div>
</div><!-- end main-wrapper -->
</hr>
<div id="footer-wrapper">
    <ul>
        <li>Copyright &copy; 2014  <a href="index.php">Our Place</a>. All Rights Reserved.</li>
        <li>Our Place is designed efficiently for easy access.</li>
        
    </ul>
</div>
</body>
</html>