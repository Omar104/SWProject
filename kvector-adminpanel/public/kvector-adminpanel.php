<?php
require_once ("../includes/functions.php");
require_once ("../includes/validation.php");
if(!isset($database))
    die("couldnt connect to database ".mysqli_error($database->connection));
if(isset($_POST['submit']))
{
    validation::validate_sp($_POST['Username'],$_POST['Password']);
    if(!empty(validation::$errorList))
    {
        report_error();
    }
    validation::validate_exist_user($_POST['Username'],$_POST['Password']);
    if(!empty(validation::$errorList))
    {
        report_error();
    }
    $_SESSION['Username'] = $_POST['Username'];
    redirect("7amada.php");  /// lesa hatet3ml
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>control management system</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Admin Panel</h1>
                        <h3>Management System</h3>
                        <hr class="intro-divider">
                        <form action="kvector-adminpanel.php" autocomplete="on" method="post">

                            <label for="Username" style="font-size: 130%" >
                                Username :
                            </label>
                            <input autocomplete="on"  maxlength="30" minlength="4" type="text" id="Username" name="Username" placeholder="Username" required/><br>
                            <label for="Password" style="font-size: 130%" >
                                Password :
                            </label>
                            <input autocomplete="off" maxlength="15" minlength="4" type="password" id="Password" name="Password" placeholder="Password" required/><br><br>
                            <button type="submit" name="submit" class="btn btn-default btn-lg"   style="font-family: 'Rammetto One';font-size:20px;font-style: normal;font-variant: normal;font-weight: 600;line-height: 26.4px;">Login</button><br><br>


                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Contact</a>
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


<?php mysqli_close($connection);?>