<?php require_once ("../includes/footer.php"); ?>
<?php
if(isset($_POST["removeblog"]))
{
    $tmp = array($_POST["Blogtitle"]);
    validation::validate_sp($tmp);
    if(empty(validation::$errorList))
    {
        if($database->exist_blog($_POST["Blogtitle"]))
        {
            $database->remove_blog($_POST['Blogtitle']);
            $tmp = array("blog removed succesfully");
           echo feedback($tmp);
        }
        else
        {
            validation::$errorList[] = "blog doesnt exist";
           echo  feedback(validation::$errorList);
        }

    }
    else
        echo feedback(validation::$errorList);
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
                <li class="active">
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
                $output_admin_log ="  <li>
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
                    Manage Blogs
                </h1>

            </div>
        </div>
        <!-- /.row -->

        
                <h3 class="page-header">
                    Add New Blogs
                </h3>

        
        <div class="row">
            <div class="col-lg-6">

                <form role="form" method="post">

                    <div class="form-group">
                        <label>Blog Title</label>
                         <input class="form-control" maxlength="20" minlength="3" type="text" id="Blogtitle" name="Blogtitle" placeholder="Blog Title" required>
                       <label>Blog Text</label>
                                <textarea class="form-control" rows="10" name="textarea" placeholder="Enter text here ..." required></textarea>
                        <p class="help-block">Enter the blog here.</p>
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Add Blog</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>
                  

                <h3 class="page-header">
                    Remove Blogs
                </h3>

                <form role="form" method="post">

                    <div class="form-group">
                        <label><h3>Blog Title</h3></label>
                         <input class="form-control" maxlength="20" minlength="3" type="text" id="Blogtitle" name="Blogtitle" placeholder="Blog Title" required>
                       
                        <p class="help-block">Enter the blog title you wish to remove.</p>
                    <br>
                    <button type="submit" name ="removeblog" class="btn btn-danger"data-toggle="modal" data-target="#myModal2">Remove Blog</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                                   </div>

                </form>





            </div>



            <div class="col-lg-6">
                <h2>Current Blogs</h2>
                <div class="table-responsive">

                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>Blog Title</th>
                        </tr>
                        </thead>
                        <tbody>
                       <?php $database->get_all_blogs();
                       while( $tmp = $database->fetch_row())
                            echo"<tr>
                            <td>{$tmp['title']}</td>
                        </tr>";
                       ?>
                        </tbody>
                    </table>






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

