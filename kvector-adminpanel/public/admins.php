<?php require_once ("../includes/footer.php"); ?>

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

                        <form role="form">
                            
                             <div class="form-group">
                                <label>Full Name</label>
                            <input class="form-control" maxlength="30" minlength="4" type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                              <p class="help-block">Enter his full name here.</p>  
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

                            <button type="submit" class="btn btn-primary">Add Admin</button>
                            <button type="reset" class="btn btn-info">Reset</button>

                        </form>
                      

                      <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Remove Admins 
                        </h1>
                        
                    </div>
                </div>
                      
                      <form role="form">
                            
                             <div class="form-group">
                                <label>Full Name</label>
                            <input class="form-control" maxlength="30" minlength="4" type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                              <p class="help-block">Enter the full name of admin you wish to remove.</p>  
                            </div>

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
                              
                            <button type="submit" class="btn btn-danger"data-toggle="modal" data-target="#myModal">Remove Admin</button>
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
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes I am sure</button>
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
                      
                        <form role="form">
                            

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

                            <button type="submit" class="btn btn-primary">Change Password</button>
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