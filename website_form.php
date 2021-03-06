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
  <script type="text/javascript">
  function onSubmit()
  {
   if (document.getElementById('temp1').checked)
   {
     document.getElementById('form1').action = "template1/template_new.php";
   }
   else if (document.getElementById('temp2').checked) 
   {
    document.getElementById('form1').action = "template1/template2.php";
  }
  else if (document.getElementById('temp3').checked) 
  {
    document.getElementById('form1').action = "template1/template3.php";
  }
  else
  {
    alert('select one of the templates');
  }
 }
 function b()
 {
  if (document.getElementById('back1').checked) 
    {
      document.getElementById('img').value = "img/bg.jpg";
    }
    else if (document.getElementById('back2').checked) 
    {
      document.getElementById('img').value = "img/bg3.jpg";
    }
    else if (document.getElementById('back3').checked) 
    {
      document.getElementById('img').value = "img/bg4.jpg";
    }
 }
  function b1()
 {
  if (document.getElementById('img1').checked) 
    {
      document.getElementById('image').value = "img/img1.jpg";
    }
    else if (document.getElementById('img2').checked) 
    {
      document.getElementById('image').value = "img/img2.jpg";
    }
    else if (document.getElementById('img3').checked) 
    {
      document.getElementById('image').value = "img/bg4.jpg";
    }
 }
</script>
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
          <li><a href="myPages.php"><i class="fa fa-font"></i> Manage my Pages</a></li>
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
          <li class="active"><i class="fa fa-edit"></i> Create New Webpage</li>
        </ol>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-6">

        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Templates
            </h2>
            <hr>
          </div>

          <div class="col-sm-4 text-center" >
            <a href="samples/template1.html"><img class="img-responsive" style="border: 1px solid black" src="img/temp1.png" alt=""></a>
            <h3>Template 1
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="temp1" value="option1" >
              </label>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <a href="samples/template2.html"><img class="img-responsive" src="img/temp2.png"  style="border: 1px solid black" alt=""></a>
            <h3>Template 2
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="temp2" value="option1" >
              </label>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <a href="samples/template3.html"><img class="img-responsive" src="img/temp3.png"  style="border: 1px solid black" alt=""></a>
            <h3>Template 3
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="temp3" value="option1" >
              </label>

            </div>
          </div>

          <div class="clearfix"></div>
        </div>

        <div class="col-lg-12">
          <hr>
          <h2 class="intro-text text-center">Details
          </h2>
          <hr>
        </div>


        <form role = "form" id="form1" action = "" method = "POST">
          <div class="form-group">
            <label>Title *</label>
            <input class="form-control" name="title">
            <p class="help-block">Example: Community Webspace</p>
          </div>

          <div class="form-group">
            <label>Location *</label>
            <input class="form-control" name="location">
            <p class="help-block">Example: Bundoora, Epping, Lower Plenty</p>
          </div>

          <div class="form-group">
            <label>Catch Phrase</label>
            <input class="form-control" name="catchPhrase">
            <p class="help-block">Example and By default: <i>The Place To Be</i></p>
          </div>

          <div class="form-group">
            <label>Description *</label>
            <textarea class="form-control" rows="3" name="Description"></textarea>
            <p class="help-block">Example: This is the community-based webspace for Bundoora</p>
          </div>

          <hr>
          <h2 class="intro-text text-center">Additional Features
          </h2>
          <hr>

          <div class="form-group">

          </div>

          <label><b><h2>Latest News</h2></b></label></br>       
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln1">
                    Latest 1 News Headline:
                  </a>
                </h4>
              </div>
              <div id="ln1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="lnews1">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="ldesc1"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln2">
                    Latest 2 News Headline:
                  </a>
                </h4>
              </div>
              <div id="ln2" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="lnews2">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="ldesc2"></textarea>
                </div>
              </div>
            </div>
          </div>

          <label><b><h2>Important News</h2></b></label></br>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln3">
                    News 1 Headline:
                  </a>
                </h4>
              </div>
              <div id="ln3" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="Inews1">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="Idesc1"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln4">
                    News 2 Headline:
                  </a>
                </h4>
              </div>
              <div id="ln4" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="Inews2">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="Idesc2"></textarea>
                </div>
              </div>
            </div>
          </div>




        </div>

        <div class="col-lg-6">

          <label><b><h2>Events</h2></b></label></br>        
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln5">
                    Event 1 Headline:
                  </a>
                </h4>
              </div>
              <div id="ln5" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="event1">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="edesc1"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#ln6">
                    Event 2 Headline:
                  </a>
                </h4>
              </div>
              <div id="ln6" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="event2">
                  <p class="help-block">Example: Latest Headline</p>
                  <textarea class="form-control" rows="3" name="edesc2"></textarea>
                </div>
              </div>
            </div>
          </div>

          <label><b><h2>Links</h2></b></label></br> 

          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#link1">
                    Link 1:
                  </a>
                </h4>
              </div>
              <div id="link1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="link1url">
                  <p class="help-block">Example: www.google.com</p>
                  <input class="form-control" name="link1title">
                  <p class="help-block">Example: Google</p>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#link2">
                    Link 2:
                  </a>
                </h4>
              </div>
              <div id="link2" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="link2url">
                  <p class="help-block">Example: www.google.com</p>
                  <input class="form-control" name="link2title">
                  <p class="help-block">Example: Google</p>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#link3">
                    Link 3:
                  </a>
                </h4>
              </div>
              <div id="link3" class="panel-collapse collapse in">
                <div class="panel-body">
                  <input class="form-control" name="link3url">
                  <p class="help-block">Example: www.google.com</p>
                  <input class="form-control" name="link3title">
                  <p class="help-block">Example: Google</p>
                </div>
              </div>
            </div>
          </div>

          <hr>
          

          <hr>
          <h2 class="intro-text text-center">Images
          </h2>
          <hr>

          <label><b><h2>Background</h2></b></label></br>

          <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img/bg.jpg" alt="">
            <h3>Image 1
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline2" id="back1" onClick="b();" value="option1" >
              </label>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img/bg3.jpg" alt="">
            <h3>Image 2
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline2" id="back2" onClick="b();" value="option2">
              </label>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img/bg4.jpg" alt="">
            <h3>Image 3
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline2" id="back3" onClick="b();" value="option3">
              </label>
            </div>
          </div>
          <div class="form-group row text-center">
            <label>Select One of the Background Images *</label>
            <input type="hidden" class="form-control" name="bg" id="img">
          </div>



          <label><b><h2>Content/Poster</h2></b></label></br>

          <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img/img1.jpg" alt="">
            <h3>Image 1
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="img1" onClick="b1();" value="option1" >
              </label>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img/img2.jpg" alt="">
            <h3>Image 2
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" onClick="b1();" id="img2" value="option2">
              </label>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>Image 3
            </h3>
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="img3" onClick="b1();" value="option3">
              </label>
            </div>
          </div>
          <div class="form-group row text-center">
            <label>Select One of the Poster Images *</label>
            <input type="hidden" class="form-control" name="bg1" id="image">
          </div>
            <div class="col-sm-offset-4" style="padding-top:20px">
              <button type="submit"  onCLick = "onSubmit()" class="btn btn-success">CREATE IT!!</button>
            </div>
          
            
          </form>

        </div>
      </div><!-- /.row -->

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
  $('.collapse').collapse();
  </script>
</body>
</html>