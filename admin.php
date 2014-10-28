 <?php

    require "auth.php";
    if($_SESSION['username'] != "root")
    {
        $_SESSION['flash_message'] ='You cant access the requested page. Its admin area';
        header('Location: index.php');
    exit();
    }

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">
        function delete()
        {

        }
    </script>

    <title>OurPlace Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
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
			<li><a href="blog.php"><i class="fa fa-font"></i> Blog</a></li>
            <li ><a href="myPages.php"><i class="fa fa-font"></i> Manage my Pages </a></li>
            <li class="active"><a href="admin.php"><i class="fa fa-dashboard"></i> Admin Section</a></li>
            <li><a href="seeContacts.php"><i class="fa fa-font"></i> See the messages</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="dropdown user-dropdown">
                <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of OurPlace Websites
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Site Name</th>
                                            <th>Geographic Location</th>
                                            <th>Made By</th>
                                            <th>Link To Site</th>
											<th>Added</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            include "connection.php";
                                            $result = mysql_query("SELECT * FROM website");
                                            while($row = mysql_fetch_array($result))
                                            {
                                                echo "<form action='delete.php' method='POST'>";
                                                echo "<tr>";
                                                $name = $row['Website_Name'];
                                                $filename = $row['Website_Name'].$row['created'].".html";
                                                echo "<td>".$row['Website_Name']."</td>";
                                                echo "<td>".$row['location']."</td>";
                                                echo "<td>".$row['username']."</td>";
                                                $url = $row['webUrl'];
                                                echo "<td class='center'><a href='$url'>www.".$name.".com.au</td>";
                                                echo "<td>".$row['created']."</td>";
                                                echo "<td><input type='hidden' name='namely' value='$name' />";
                                                echo "<input type='hidden' name='filename' value='$filename' />";
                                                echo "<input class = 'btn btn-danger' type='submit' value='delete' /></td>";

                                                
                                                echo "</tr>";
                                                echo "</form>";
                                            }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Description</h4>
                                <p>Here is a list of all the websites that have been created through OurPlace. Each entry into the table includes a link to the site for easy access.</p>
                            </div>
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
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
