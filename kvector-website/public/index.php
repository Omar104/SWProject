<!DOCTYPE html>
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

<html lang="en">

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
                </butright>
                <a class="navbar-brand" href="#Home">Home</a>


            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <img  src="../../images/kv.jpg" alt="logo" style="width:100px;height:80px; float:right;">
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
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
           <!-- <div class="transbox">
            <div class="background">-->
  
    
  
            <h1 class="intro-message"> K-Vector Club <small style="color: rgb(12, 10, 10)  font-weight: bold;  font-style: oblique;">#NeverTooLate</small></h1>
   <!-- </div>
</div>-->

                <h1 class="page-header">Photo Gallery
                    <small>Albums</small>
                </h1>
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
                    <a ><?php if(isset($al->album1)) echo $al->album1 ?></a>
                </h3>
                <p><?php  echo $al->desc1?></p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a <?php echo $al->to_slides(2)?>>
                    <img class="img-responsive" src="<?php echo $al->cover2() ?>" alt="">
                </a>
                <h3>
                    <a ><?php if(isset($al->album2))echo $al->album2 ?></a>
                </h3>
                <p><?php  echo $al->desc2?></p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a <?php echo $al->to_slides(3)?>>
                    <img class="img-responsive" src="<?php echo $al->cover3()?>" alt="">
                </a>
                <h3>
                    <a ><?php if(isset($al->album3))echo $al->album3?></a>
                </h3>
                <p><?php echo $al->desc3?></p>
            </div>
        </div>
        <!-- /.row -->
        <hr>


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

                <h1 class="page-header">
                    Magazine
                    <small>Articles</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="Harticles/startbootstrap-blog-home-1.0.4/index.html">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Omar</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2015 at 10:00 PM</p>
                <hr>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore labo</p>
                <a class="btn btn-primary" href="Harticles/startbootstrap-blog-home-1.0.4/index.html">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="Harticles/startbootstrap-blog-home-1.0.4/index.html">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Omar tany -_-</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2015 at 10:45 PM</p>
                <hr>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="Harticles/startbootstrap-blog-home-1.0.4/index.html">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="Harticles/startbootstrap-blog-home-1.0.4/index.html">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Omar taalet ha ha ha :v</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2015 at 10:45 PM</p>
                <hr>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="Harticles/startbootstrap-blog-home-1.0.4/index.html">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                

            </div>

            
        
        <hr>
        <a  name="About"></a>
        <br>
        <br>
        <br>
        <br>


         </div>

    </div>
    <!-- /.container -->

                <h2 strong>
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
                    <h2 strong>Contact us:</h2>
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