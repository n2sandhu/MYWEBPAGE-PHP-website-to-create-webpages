

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
      var a=document.forms["reg"]["fname"].value;
      var b=document.forms["reg"]["lname"].value;
      var g=document.forms["reg"]["username"].value;
      var h=document.forms["reg"]["password"].value;
      if ((a==null || a=="") && (b==null || b=="")  && (h==null || h=="") && (g==null || g==""))
        {
        alert("All Field must be filled out");
        return false;
        }
      if (a==null || a=="")
        {
        alert("First name must be filled out");
        return false;
        }
      if (b==null || b=="")
        {
        alert("Last name must be filled out");
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
      <a class="navbar-brand" href="index.html">Our Place</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-road"></span> About Us</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-book"></span> Contact Us</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div id="main-wrapper">

    <div id="content-wrapper">
        <div style="clear:both;"></div>
        
        
        <div class="green-full-width Sign In">      
            <div class="content-body">
                <form name="reg" action="code.php" role="form" method="post" onsubmit="return validateForm()">
                    <h2>New User? Create an Account</h2>
                    <hr></hr>
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control"  placeholder="Enter First Name" name="fname" value="">
                        <font color="red"></font>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                        <font color="red"> <br></font>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" value="">
                        <font color="red"></font> 
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="">
                        <font color="red"></font> 
                    </div> 
                    <button type="submit" class="btn btn-default pull-right btn-success">Register</button>
                    <br>
                    <br>
                    <br>
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