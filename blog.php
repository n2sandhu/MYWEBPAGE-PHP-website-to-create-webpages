 <?php

    require "auth.php";

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OurPlace Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="stylesheet" href="css/blogStyle.css">
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
            <li><a href="website_form.php"><i class="fa fa-desktop"></i> Create New Webpage</a></li>
			<li class="active"><a href="blog.php"><i class="fa fa-font"></i> Blog</a></li>
      <li><a href="myPages.php"><i class="fa fa-font"></i> Manage my Pages </a></li>
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
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

      <div class="row">

        <div class="col-sm-8 blog-main">
		
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			  <li class="active"><i class="fa fa-edit"></i> Blog</li>
            </ol>
		<form role="form" action="postBlog.php" method="POST">
			   <label>Blog Heading</label>
                <input class="form-control" name="heading">
                <p class="help-block">Example: Rstaurant opening</p>
				
			  <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" rows="3" name="desc"></textarea>
                <p class="help-block">Example: New restaurant opens on main rd</p>
              </div>
              <div class="row">
                <div class="col-sm-1 col-sm-offset-10">
                  <input type="submit" class="btn btn-success" value="Post">
                </div>
              </div>
			  </form>
			  <hr>

          <div class="blog-post">
            <h2 class="blog-post-title">Present Blogs</h2>
            
            <?php
            include "connection.php";
                  $result = mysql_query("SELECT * FROM blogs ORDER BY id DESC");

                while($row = mysql_fetch_array($result))
                {
                echo "<div class='boxy'>";
                echo "<div class='row heading'><strong>" . $row['heading'] . "</strong></div>";
                echo "<div class='row content'>" . $row['descp'] . "</div>";
                echo "<div class='row'><div class='col-sm-3 col-sm-offset-9 postName'>Posted By : " . $row['username'] . "</div></div>";
                echo "</div>";
                }
              
              ?>


          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
