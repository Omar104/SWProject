<!DOCTYPE html>
<html lang="en">
<?php
require_once ("../includes/db.php");
require_once ("../includes/albums.php");
$alb = new albums($_GET['cp'],$database->no_albums(),$database);
$alb->fetch_photos();
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Half Slider - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <img  src="../../images/kv.jpg" alt="logo" style="width:100px;height:80px; float:right;">
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br>
<br>
<br>
<br>


    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide" >
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
           <?php echo $alb->slide($_GET['al']) ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel"  data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
<br>
<br>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo $_GET['al']?></h1>
                <p><?php
                    if($_GET['desc']== 1)
                        echo $alb->desc1;
                    else if( $_GET['desc'] == 2)
                        echo  $alb->desc2;
                    else
                        echo $alb->desc3;
                    ?></p>
            </div>
        </div>

        <hr>

            <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; IKOY 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
