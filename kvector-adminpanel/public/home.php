<?php require_once("../includes/footer.php") ?>


<?php   // display the admin tap only if this is a super admin
        $output_admin_bar ="<li ><a  href=\"../public/admins.php\"><i class=\"fa fa-fw fa-cog\"></i> Admins</a></li>";
        ?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a class="navbar-brand" href="../public/home.php"><i class="fa fa-fw fa-home"></i> Admin Panel</a>
                </li>
                <?php  // if super admin -> display admin tap
                if($cur_user->getSuper())
                    echo $output_admin_bar;
                ?>
                <li>
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


    <h1 class="intro-message" style="color: #f8f8f8;">WELCOME <?php echo strtoupper($cur_user->getFirstName()) ?></h1>
    <img class="img-responsive" src="img/profile.png" alt="" style="position: relative;left: 435px;top: -40px;">

    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->







<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
