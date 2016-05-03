<?php require_once ("../includes/footer.php"); ?>

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
                    <a href="tables.html"><i class="fa fa-fw fa-picture-o"></i> Albums</a>
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
                <li>
                    <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                </li>
                <li>
                    <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                </li>

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
                    Manage Contact Info
                </h1>

            </div>
        </div>
        <!-- /.row -->

        
                <h3 class="page-header">
                    Contact Info
                </h3>

        
        <div class="row">
            <div class="col-lg-6">

                <form role="form">

                    <div class="form-group">
                        <label>Phone Number</label>
                         <input class="form-control" maxlength="20" minlength="5" type="tel" id="phoneno" name="phoneno" placeholder="Phone Number" required>
                        
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Update Phone Number</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>
                  
                <br>
                <form role="form">

                    <div class="form-group">
                       <label>Email Address</label>
                         <input class="form-control" maxlength="30" minlength="3" type="email" id="email" name="email" placeholder="Email" required>
                        
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Update Email Address</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>

<br>
                <form role="form">

                    <div class="form-group">
                         <label>Facebook Link</label>
                         <input class="form-control"  minlength="3" type="url" id="link" name="link" placeholder="Facebook Link" required>
                        
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Update Facebook link</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>
<br>
<br>


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

