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
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>

        <div id="wrapper">

          <!-- Sidebar -->
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div  class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="margin-left : 15px; padding-top:10px"><a href="index.php"><img   src="img/logo.png"></a></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="website_form.php"><i class="fa fa-desktop"></i> Create New Webpage</a></li>
            <li><a href="blog.php"><i class="fa fa-font"></i> Blog</a></li>
            
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
    </div>
    </nav>

    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                  <li class="active"><i class="fa fa-dashboard"></i> Home</li>
              </ol>
              <div class="panel panel-default">
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
            
                <div class="panel-heading">
                    List of Messages
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">

                    <div class="blog-post">
            <h2 class="blog-post-title">Present messages </h2>
            
            <?php
            include "connection.php";
                  $result = mysql_query("SELECT * FROM contact");

                while($row = mysql_fetch_array($result))
                {
                echo "<div class='boxy'>";
                echo "<div class='row heading'><strong>" . $row['email'] . "</strong></div>";
                echo "<div class='row content'>" . $row['message'] . "</div>";
                echo "<div class='row'><div class='col-sm-3 col-sm-offset-9 postName'>Posted By : " . $row['name'] . "</div></div>";
                echo "</div>";
                }
              
              ?>


          </div>>
                    <!-- /.table-responsive -->
                    
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Page Specific Plugins -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script src="js/morris/chart-data-morris.js"></script>
<script src="js/tablesorter/jquery.tablesorter.js"></script>
<script src="js/tablesorter/tables.js"></script>

</body>
</html>

