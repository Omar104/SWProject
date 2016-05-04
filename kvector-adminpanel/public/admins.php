<?php require_once ("../includes/footer.php"); ?>

<?php
    if(isset($_POST["add_admin"]))
    {
        $add_admin_info = array();
        $add_admin_info['firstname'] = $_POST['firstname'];
        $add_admin_info['lastname'] = $_POST['lastname'];
        $add_admin_info['Username'] = $_POST['Username'];
        $add_admin_info['Password'] = $_POST['Password'];
        $add_admin_info['Password2'] = $_POST['Password2'];
        validation::validate_sp($add_admin_info);
        if(empty(validation::$errorList))
        {
            validation::is_valid_new_user_name($add_admin_info);
        }
        if(empty(validation::$errorList))
        {
            $database->insert_new_admin($add_admin_info);
            // log
            $log->set_action("Admin {$add_admin_info['Username']} was added");
            $log->write_action();
            //
            // message successful
            $message_array = array("Admin {$add_admin_info['Username']} Successfully added");
            feedback($message_array);
        }
        else
        {
            // new error repoting lama omar yas7a
        }
    }
    if(isset($_POST["remove_admin"]))
    {
        $remove_admin_info = array();
        $remove_admin_info['Username'] = $_POST['Username'];
        $remove_admin_info['Password'] = $_POST['Password'];
        validation::validate_sp($remove_admin_info);
        if(empty(validation::$errorList))
        {
            validation::is_valid_existing_user_name($remove_admin_info);
        }
        if(empty(validation::$errorList))
        {
            $database->remove_admin($remove_admin_info['Username']);
        }
        else
        {
            // new error repoting lama omar yas7a
        }
    }
    if(isset($_POST["change_pass"]))
    {

    }
?>



<?php   // display the admin tap only if this is a super admin
        $output_admin_bar ="<li class=\"active\"><a  href=\"../public/admins.php\"><i class=\"fa fa-fw fa-cog\"></i> Admins</a></li>";
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
                <li>
                    <a href="logfile.php"><i class="fa fa-fw fa-file"></i> LogFile</a>
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
                        <h1   style="color: #f8f8f8;font-weight: bold;text-align: center;  margin: 0;text-shadow: 2px 2px 3px rgba(0,0,0,0.6);font-size: 4em;
    
">
                            Manage Admins 
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                  
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add new Admins 
                        </h1>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="POST">
                            
                             <div class="form-group">
                                <label>First Name</label>
                            <input class="form-control" maxlength="30" minlength="4" type="text" id="firstname" name="firstname" placeholder="First Name" required>
                              <p class="help-block">Enter his first name here.</p>
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" maxlength="30" minlength="4" type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                                <p class="help-block">Enter his last name here.</p>
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" maxlength="30" minlength="4" type="text" id="Username" name="Username" placeholder="Username" required>
                                <p class="help-block">Enter his new username here.</p>
                            </div>
                             
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" autocomplete="off" maxlength="15" minlength="4" type="password" id="Password" name="Password" placeholder="Password" required>
                                <p class="help-block">Enter his initial password here.</p>
                            </div>
                              
                              <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" autocomplete="off" maxlength="15" minlength="4" type="password" id="Password2" name="Password2" placeholder="Password" required>
                            </div>

                            <button type="submit" name="add_admin" class="btn btn-primary">Add Admin</button>
                            <button type="reset" class="btn btn-info">Reset</button>

                        </form>
                      

                      <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Remove Admins 
                        </h1>
                        
                    </div>
                </div>
                      
                      <form role="form" method="POST">

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" maxlength="30" minlength="4" type="text" id="Username" name="Username" placeholder="Username" required>
                                <p class="help-block">Enter the username of admin you wish to remove.</p>
                            </div>
                             
                            <div class="form-group">
                                <label>Your Password</label>
                                <input class="form-control" autocomplete="off" maxlength="15" minlength="4" type="password" id="Password" name="Password" placeholder="Password" required>
                                <p class="help-block">Enter your password here.</p>
                            </div>
                              
                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#myModal">Remove Admin</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                           

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="color: rgb(0,0,0);">Are you sure ?</h4>
                                        </div>
                                        <div class="modal-body"style="color: rgb(0,0,0);">
                                                Are you sure you want to remove admin? 
                                              if admin is removed he cannot log in as admin anymore and he cannot edit anything in this website.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="remove_admin" class="btn btn-primary" data-dismiss="modal">Yes I am sure</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                        </form>
                            
                        


                        
                        <h1 class="page-header">
                            Change Password
                        </h1>
                      
                        <form role="form" method="POST">
                            

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" maxlength="30" minlength="4" type="text" id="Username" name="Username" placeholder="Username" required>
                                <p class="help-block">Enter your username.</p>
                            </div>
                             
                            <div class="form-group">
                                <label>Old Password</label>
                                <input class="form-control" autocomplete="off" maxlength="15" minlength="4" type="password" id="Password" name="Password" placeholder="Old Password" required>
                                <p class="help-block">Enter your old password.</p>
                            </div>
                              
                              <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" autocomplete="off" maxlength="15" minlength="4" type="password" id="Passwordold" name="Passwordold" placeholder="New Password" required>
                                
                            </div>

                              <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" autocomplete="off" maxlength="15" minlength="4" type="password" id="Passwordnew" name="Passwordnew" placeholder="New Password" required>
                            </div>

                            <button type="submit" name="change_pass" class="btn btn-primary">Change Password</button>
                            <button type="reset" class="btn btn-info">Reset</button>

                        </form>





                    </div>

                      
                         
                         <div class="col-lg-6">
                        <h2>Current Admins</h2>
                        <div class="table-responsive">
                        
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Full name</th>
                                        <th>Admin since</th>
                                        <th>Added by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Omarove</td>
                                        <td>Omar Sayed</td>
                                        <td>First human being</td>
                                        <td>himself</td>
                                    </tr>
                                    <tr>
                                        <td>Khaledbibo</td>
                                        <td>Khaled Osama</td>
                                        <td>2016</td>
                                        <td>Omarove</td>
                                    </tr>
                                    <tr>
                                        <td>Another one :v</td>
                                        <td>Another one</td>
                                        <td>2016</td>
                                        <td>Dj khaled</td>
                                    </tr>
                                    <tr>
                                        <td>Another one :v</td>
                                        <td>Another one</td>
                                        <td>2016</td>
                                        <td>Dj khaled</td>
                                    </tr>
                                    <tr>
                                        <td>Another one :v</td>
                                        <td>Another one</td>
                                        <td>2016</td>
                                        <td>Dj khaled</td>
                                    </tr>
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
