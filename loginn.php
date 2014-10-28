<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        
        
        
        <title>Our Place</title>

            <script type="text/javascript">
      function validateForm()
      {
      
      var g=document.forms["reg"]["Username"].value;
      var h=document.forms["reg"]["password"].value;
      if (((h==null || h=="") && (g==null || g==""))
        {
        alert("All Field must be filled out");
        return false;
        }
      if (g==null || g=="")
        {
        alert("username must be filled out");
        return false;
        }
      if (h==null || h=="")
        {
        alert("password must be filled out");
        return false;
        }
      }
    </script>        


  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <link rel='stylesheet' id='dm_style-css'  href='css/loginStyle.css' type='text/css' />


</head>


<body>
    

          
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
      <div style="margin-left : 15px; padding-top:10px"><a href="index.php"><img   src="img/logo.png"></a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul style="margin-left:10px" class="nav navbar-nav">
        <li class="active"><a href="loginn.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-road"></span> About Us</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-book"></span> Contact Us</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div id="main-wrapper">

    <div id="content-wrapper">
        <div style="clear:both;"></div>
        
        <div align="center" style="color:red;">
            <?php 
            
          if (!empty($_SESSION['flash_message'])) {
                // let's show our message to a user
                echo $_SESSION['flash_message'];
                // and don't forget to erase it from session
                unset($_SESSION['flash_message']);
            }
          ?>  
            </div>
        <div class="green-full-width Sign In">      
                    <div class="content-body">
                        <form method="post" action="login.php" class="login">
                          <label style="Margin-left:30px"><h2>Our Place </h2></label>
                            <p class="form-row form-row-wide">
                                <label for="username">Username:</label>
                                <input type="text" class="input-text" name="username" id="username" tabindex="1"/>
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="password" class="sign_pw">Password:</label>
                                <a class="lost_password" href="#" tabindex="3"> Lost Password?</a>
                                <input class="input-text" type="password" name="password" id="password" tabindex="2"/>
                            </p>
                            <div class="clear"></div>

                            <p class="form-row login_form">
                                <input type="hidden" name="login" value="login" />
                                <input type="submit" class="button" name="sign_in" value="Sign In" />
                                <a class="button register_button" href="reg.php" role="button">Register</a>
                            </p>
                        </form>
                    </div>

                            </div>
        <ul class="account-extra">
    <li style="color:"#555555" class="col-1">
        <h3 style="color:#A70000">Location Websites</h3>
        <div style="height:140px;"><p>At OurPlace.com you can make your own websites using available layouts.You just need to login and fill in a form and you are ready to go...</p></div>
        <a href="#" title="" class="button" >Read more</a>
    </li>

    <li class="col-2">
        <h3>Choice Range</h3>
        <div style="height:140px;"><p>Our Place.com offers three different layouts for your website to choose from. Choose the one that suits your need better and in no time you will have a website of your own...</p></div>
        <a href="#" title="" class="button" >Read more</a>
    </li>

    <li class="col-3">
        <h3 style="color:#A70000">Something else</h3>
        <div style="height:140px;"><p>We can put in text here...</p></div>
        <a href="#" title="" class="button" >Read More</a>
    </li>
</ul>    </div>
</div><!-- end main-wrapper -->

<div id="footer-wrapper">
    <ul>
        <li>Copyright &copy; 2014  <a href="#">OurPlace Pty Ltd</a>. All Rights Reserved.</li>
        <li>Helping Business growth </li>
        
    </ul>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $("#tip").tooltip();
    </script>
      
</body>
</html>