<!DOCTYPE html>
<html class="full" lang="en">
<?php require_once ("../includes/functions.php");    //includes of all needed classes and functions
      require_once ("../includes/pagination.php");
      require_once ("../includes/albums.php");
      require_once ("../includes/about.php");
if(!isset($database))    // checking connectivity to database
{
    die("database unable to connect");
}
if(isset($_GET['page'])) // current page of the album
{
    $pg->current_page = $_GET['page'];
}
$ab = new about($database);
$al = new albums($pg->current_page ,$database->no_albums(),$database);
$al->fetch_photos();
?>



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
    <link href="css/full.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="full">

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
                </butright>
                <img  class="navbar-brand" src="../../images/kv.jpg" alt="logo" style="width:100px;height:80px; float:left;position: absolute;
    left: 0px;
    top: -15px;
    bottom: 0px;
    z-index: 0; ">
                <a class="navbar-brand" href="#Home">Home</a>


            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#About">About</a>
                    </li>
                    <li>
                        <a href="#Home">Gallery</a>
                    </li>
                    <li>
                        <a href="#Magazine">Magazine</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<a name="Home"></a>
    <!-- Page Content -->
    <div class="container" >

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
           <!-- <div class="transbox">
            <div class="background">-->
  
    
  
            <h1 class="intro-message" style="color: #f8f8f8;"> K-Vector Club <small style="color: rgb(12, 10, 10)  font-weight: bold;  font-style: oblique;">#NeverTooLate</small></h1>
   <!-- </div>
</div>-->

                <h1   style="font-family: 'Rammetto One';
	font-size: 50px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;  color: #f8f8f8;">Photo Gallery

                </h1>
                <br>
            </div>
        </div>
        <!-- /.row -->

       
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a <?php echo $al->to_slides(1)?>>
                    <img class="img-responsive" src="<?php echo $al->cover1() ?>" alt="">
                </a>
                <h3>
                    <?php if(isset($al->album1)) echo "         ".$al->album1 ?>
                </h3>
               <pre style="font-size: 16px; font-family: Optima;
    font-style: normal;
    font-variant: normal;" > <p><?php  echo $al->desc1?></p></pre>
            </div>
            <div class="col-md-4 portfolio-item">
                <a <?php echo $al->to_slides(2)?>>
                    <img class="img-responsive" src="<?php echo $al->cover2() ?>" alt="">
                </a>
                <h3>
                    <?php if(isset($al->album2))echo $al->album2 ?>
                </h3>
                <pre style="font-size: 16px; font-family: Optima;
    font-style: normal;
    font-variant: normal;" ><p><?php  echo $al->desc2?></p></pre>
            </div>
            <div class="col-md-4 portfolio-item">
                <a <?php echo $al->to_slides(3)?>>
                    <img class="img-responsive" src="<?php echo $al->cover3()?>" alt="">
                </a>
                <h3>
                    <?php if(isset($al->album3))echo $al->album3?>
                </h3>
               <pre style="font-size: 16px; font-family: Optima;
    font-style: normal;
    font-variant: normal;" > <p><?php echo $al->desc3?></p></pre>
            </div>
        </div>
        <!-- /.row -->
        

        <!-- Pagination -->
        <a name="Magazine"></a>
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <?php echo $pg->create_list();?>

                </ul>
            </div>
        </div>

        
        <br>
        <br>
        <br>
        <!-- /.row -->
<hr>
<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 style="font-family: 'Rammetto One';
                font-size: 50px;
                font-style: normal;
                font-variant: normal;
                font-weight: 500;
                line-height: 26.4px;  color: #f8f8f8;" >
                    Magazine

                </h1>
                <br>
                <iframe width="150%" height="700px" src="blogy.php" name="iframe_a"></iframe>
            </div>

            
        
        
        <a  name="About"></a>
        <br>
        <br>
        <br>
        <br>


         </div>

    </div>
    <!-- /.container -->

                <h2 strong style="font-family: 'Rammetto One';
    font-size: 50px;
    font-style: normal;
    font-variant: normal;
    font-weight: 500;
    line-height: 26.4px;  color: #f8f8f8;">
                    What is K-Vector?
                </h2>
                
                <hr>
                
                <pre style="font-size: 16px; font-family: Optima;
    font-style: normal;
    font-variant: normal;" > 
                  <?php echo $ab->info ?></pre>
                

                <hr>




    <div class="banner" >

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2 strong style="color: rgb(46, 51, 53);">Contact us:</h2>
                 <br>
                <br>
                    <p strong >&#9990; Phone:<?php echo $ab->t_number ?></p>
                     
                     <p strong> &#9993; Email:<?php echo $ab->email?></p>
                     <br>

                
                
                    <ul class="list-inline banner-social-buttons">
                        
                        <li>
                            <a href=<?php echo '"'.$ab->link.'"' ?> class="btn btn-primary"> <span class="network-name" > Facebook</span></a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container  &#xf230; &#xf082; -->

    </div>
    <!-- /.banner -->
    <!-- /.container -->
<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#Home">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#About">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#Home">Gallery</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#Magazine">Magazine</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; IKOY 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
$database->close();
?>