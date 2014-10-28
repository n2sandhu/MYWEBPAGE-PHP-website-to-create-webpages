<?php include "auth.php";
//require "auth.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create Webpage</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div style="margin-left : 15px; padding-top:10px"><a href="index.php"><img   src="img/logo.png"></a></div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="website_form.php"><i class="fa fa-desktop"></i> Create New Webpage</a></li>
          <li><a href="blog.php"><i class="fa fa-font"></i> Blog</a></li>
          <li><a href="blog.php"><i class="fa fa-font"></i> Manage my Pages</a></li>
          <?php if($_SESSION['username'] == "root")
            {
                echo  "<li><a href='admin.php'><i class='fa fa-font'></i> Admin Section</a></li>";
            }  
            ?>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">

          <li class="dropdown user-dropdown">
            <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">
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
    <div class="row">
      <div class="col-lg-12">
        <h1>Create Webpage</h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><i class="fa fa-edit"></i> Add an Advertisement</li>
        </ol>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-6">

         <label><b><h2>Events</h2></b></label></br>       
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln5">
                    Advertisement Headline:
                  </a>
                </h4>
              </div>
              <div id="ln5" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="adver">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="adverdesc"></textarea>
                </div>
              </div>
            </div>
          </div>

        <div class="box">
          
      </div><!-- /.box -->

    </div><!-- /.col-lg-6 -->

  </div><!-- /.row -->

  <!-- JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
  $('.collapse').collapse();
  </script>
</body>
</html>