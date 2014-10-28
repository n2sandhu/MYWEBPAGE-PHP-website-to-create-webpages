<div class="row" style="background-color: #1C8F73; text-align:center; padding : 5px 0px;">
    <a href="/ice/index.php" class="btn btn-success">Go Back to Home Page</a>
</div>
<?php
//require "auth.php";
include "auth.php";
include "connection.php";
$title = $_POST['title'];
$location = $_POST['location'];
$catchPhrase = $_POST['catchPhrase'];
$description = $_POST['Description'];
$lnews1 = $_POST['lnews1'];
$ldesc1 = $_POST['ldesc1'];
$lnews2 = $_POST['lnews2'];
$ldesc2 = $_POST['ldesc2'];
$Inews1 = $_POST['Inews1'];
$Idesc1 = $_POST['Idesc1'];
$Inews2 = $_POST['Inews2'];
$Idesc2 = $_POST['Idesc2'];
$event1 = $_POST['event1'];
$edesc1 = $_POST['edesc1'];
$event2 = $_POST['event2'];
$edesc2 = $_POST['edesc2'];
$link1url = $_POST['link1url'];
$link1title = $_POST['link1title'];
$link2url = $_POST['link2url'];
$link2title = $_POST['link2title'];
$link3url = $_POST['link3url'];
$link3title = $_POST['link3title'];
$img_src = $_POST['bg'];
$img_src1 = $_POST['bg1'];

$resultVerify = mysql_query("SELECT * FROM website_info WHERE title = '$title'");
$rows = mysql_num_rows($resultVerify);

if($title == "" || $location == "" || $catchPhrase == "" || $description == "" || $img_src == "" || $img_src1 == "")
{
    $_SESSION['flash_message'] ='Fill in all the required fields to continue( marked with *)';
    header('Location: ../website_form.php');
    exit();
}
else if($rows == 1)
{
    $_SESSION['flash_message'] ='The website with this title already exists. Refer to home page for more info';
    header('Location: ../website_form.php');
    exit();   
}
    $result = mysql_query("INSERT INTO website_info VALUES('$title' , '$location' , '$catchPhrase' , '$description' , '$lnews1' , '$ldesc1' , '$lnews2' , '$ldesc2', 
    '$Inews1' , '$Idesc1', '$Inews2', '$Idesc2' ,  '$event1', '$edesc1' , '$event2' , '$edesc2' , '$link1url' , '$link1title' , '$link2url' , '$link2title' , '$link3url' , '$link3title' , '$img_src' , '$img_src1')");
    mysql_close($conn);
    // Start the buffering //
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/site-template.css" rel="stylesheet">
</head>

<body style="background: url(<?php echo $img_src; ?>) no-repeat center center fixed;">
    
    <div class="brand"><i><?php echo $location; ?></i></div>
    <div class="address-bar"><i><?php if ($catchPhrase == null) {
        echo "The Place to see";
    }
    else
    { echo $catchPhrase;} ?></i></div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<!-- Collapsed menu title -->
                <a class="navbar-brand" href="index.html">Bundoora</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a>
                    </li>
                    <?php
                    if($link1title !="")
                    {
                        echo "<li><a href='$link1url'>".$link1title ."</a></li>";
                    }
                    if($link2title != "")
                    {
                        echo "<li><a href='$link2url'>".$link2title ."</a></li>";
                    }
                    if($link1title !="")
                    {
                        echo "<li><a href='$link3url'>".$link3title ."</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
					<img src="<?php echo $img_src1; ?>">
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name"><i><?php echo $location; ?></i></span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small><?php echo $description; ?></strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row box">
            <div class="col-sm-6">
            <div class="" >
                <div class="col-lg-12" style="text-align: center;">
                    <hr>
                    <h2 class="intro-text text-center">
						Latest News
                    </h2>
                    <hr>
                    
                    <hr class="visible-xs">
                    <p>
                        <strong><?php echo $lnews1; ?></strong></br>
						<?php echo $ldesc1; ?>
					</p>
                    <p>
						<strong><?php echo $lnews2; ?></strong></br>
					</p>
                    <p>
						<?php echo $ldesc2; ?>
					</p>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
                  <div class="">
                <div class="col-lg-12" style="text-align: center;">
                    <hr>
                    <h2 class="intro-text text-center">
                        Important News
                    </h2>
                    <hr>
                    
                    <hr class="visible-xs">
                    <p>
                        <strong><?php echo $Inews1; ?></strong></br>
                        <?php echo $Idesc1; ?>
                    </p>
                    <p>
                        <strong><?php echo $Inews2; ?></strong></br>
                    </p>
                    <p>
                        <?php echo $Idesc2; ?>
                    </p>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
						Event Information
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/slideshow_pics/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>
						<strong><?php echo $event1; ?></strong>
					</p>
                    <p>
						<?php echo $edesc1; ?>
					</p>
                    <p>
						<strong><?php echo $event2; ?></strong>
					</p>
                    <p>
                        <?php echo $edesc2; ?>
                    </p>
                </div>
            </div>
        </div>
			
        <div class="row">
            <div class="box">
                <div class="col-lg-12 center text-center">
			<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $location. ",Victoria" ?>&output=embed"></iframe>
			</div>
		</div>
		</div>
        </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; OurPlace 2014</p>
                    <a href="../index.php"><img   src="img/logo.png"></a>
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#abtUs">
						About Us
					</button>
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#contactUs">
						Contact Us
					</button>
                </div>
            </div>
        </div>
	
	<div class="modal fade" id="abtUs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">About Us</h4>
      </div>
      <div class="modal-body">
        We are a company dedicated to providing a system that is easy to use for councils to set up 'location' websites. Simply create an account and use our webplace creater to select from a choice of templates and enter in your specific details. Once created it can be viewed by the public!
      </div>
    </div>
  </div>
</div>

	<div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
        To reach us email:  <a href="mailto:admin@ourplace.com">admin@ourplace.com</a> or call: +61 12345678
      </div>
    </div>
  </div>
</div>
	
	
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>

<?php
echo '1';
$timestamp = date('d-m-y');
$myFile = $title.$timestamp.".html";
// Get the content that is in the buffer and put it in your file //
file_put_contents($myFile, ob_get_contents());
include "connection.php";
$url = "template1/". $myFile;
$query = mysql_query("INSERT INTO website VALUES ('$title' ,'$location', '$url' , '$user','$timestamp' )");
mysql_close($conn);
?>
