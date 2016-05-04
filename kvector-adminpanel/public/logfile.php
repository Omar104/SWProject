<?php require_once ("../includes/footer.php"); ?>
<?php
if(isset($_POST["submit"]))
{
    $log->clear_log();
}
?>
<?php   // display the admin tap only if this is a super admin
        $output_admin_bar ="<li ><a  href=\"../public/admins.php\"><i class=\"fa fa-fw fa-cog\"></i> Admins</a></li>";
        ?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li >
                    <a class="navbar-brand" href="../public/home.php"><i class="fa fa-fw fa-home"></i> Admin Panel</a>
                </li>
                <?php  // if super admin -> display admin tap
                if($cur_user->getSuper())
                    echo $output_admin_bar;
                ?>
                <li >
                    <a href="blogs.php"><i class="fa fa-fw fa-pencil"></i> Blogs</a>
                </li>
                <li>
                    <a href="albums.php"><i class="fa fa-fw fa-picture-o"></i> Albums</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-font"></i> About <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="about.php">About Section</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Section</a>
                        </li>
                    </ul>
                </li>
                <?php   // display the admin tap only if this is a super admin
                $output_admin_log ="  <li class=\"active\">
                    <a href=\"logfile.php\"><i class=\"fa fa-fw fa-file\"></i> LogFile</a>
                </li>";
                if($cur_user->getSuper())
                    echo $output_admin_log;
                ?>
                

            </ul>
            <!-- Footer     -->

        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <br>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1   style="color: #f8f8f8;font-weight: bold;text-align: center;  margin: 0;text-shadow: 2px 2px 3px rgba(0,0,0,0.6);font-size: 4em;">
                    Log File
                </h1>

            </div>
        </div>
        <!-- /.row -->

        
                <h3 class="page-header">
                    Events
                </h3>

        
        <div class="row">
            <div class="col-lg-7">

               <div class="table-responsive">

                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>Event</th>
                            
                        </tr>
                        </thead>
                        <tbody>



                         <?php $log->read_actions(); ?>


                        </tbody>
                    </table>

                   <form role="form" method="post" >


                       <button type="submit" name="submit" class="btn btn-warning">Clear LOG-FILE</button>


                   </form>




                </div>



            </div>



            </div>




        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

