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
                <li >
                    <a href="blogs.php"><i class="fa fa-fw fa-pencil"></i> Blogs</a>
                </li>
                <li class="active">
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
                <h1   style="color: #f8f8f8;font-weight: bold;text-align: center;  margin: 0;text-shadow: 2px 2px 3px rgba(0,0,0,0.6);font-size: 4em;">
                    Manage Albums
                </h1>

            </div>
        </div>
        <!-- /.row -->

        
                <h3 class="page-header">
                    Add New Album
                </h3>

        
        <div class="row">
            <div class="col-lg-6">

                <form role="form">

                    <div class="form-group">
                        <label>Album Title</label>
                         <input class="form-control" maxlength="20" minlength="3" type="text" id="albumtitle" name="albumtitle" placeholder="Album Title" required>
                         <br>
                       <label>Upload photo</label>
                         <input type="file" name="fileToUpload" value="Upload Photo" id="fileToUpload">
    
   <br>
                       <label>Description</label>
                                <textarea class="form-control" rows="10" name="textarea" placeholder="Write description here ..." required></textarea>
                        
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Add Album</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>
                <br>

                  

                <h3 class="page-header">
                    Edit Album 
                </h3>
                  


                <form role="form">

                    <div class="form-group">
                        <br>
                            
                                <label>Select Album</label>
                                <select class="form-control">
                                    <option>Album 1</option>
                                    <option>Album 2</option>
                                    <option>Album 3</option>
                                    <option>Album 4</option>
                                    <option>Album 5</option>
                                </select>
                            <br>
                       <label>Upload photo</label>
                         <input type="file" name="fileToUpload" value="Upload Photo" id="fileToUpload">
                         <br>
    
                       <label>Edit Album Title</label>
                         <input class="form-control" maxlength="20" minlength="3" type="text" id="albumtitle2" name="albumtitle2" placeholder="Album Title" >
                         <br>

                       <label>Edit description</label>
                                <textarea class="form-control" rows="10" name="textarea" placeholder="Write description here ..." ></textarea>
                        
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Update Album</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    </div>

                </form>


                <h3 class="page-header">
                    Delete Album
                </h3>

                <form role="form">

                    <div class="form-group">
                        <label><h3>Album Title</h3></label>
                         <input class="form-control" maxlength="20" minlength="3" type="text" id="Blogtitle" name="Blogtitle" placeholder="Album Title" required>
                       
                        <p class="help-block">Enter the album title you wish to delete.</p>
                    <br>
                    <button type="submit" class="btn btn-danger">Delete Album</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                    <br>
                    <br>
                    <br>
                    

                </form>
                </div>
        
            <div class="col-lg-6">
                <h2>Current Albums</h2>
                <div class="table-responsive">

                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>Album Title</th>
                            <th>Added by</th>
                            <th>Number of photos</th>
                            <th>date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Omarove</td>
                            <td>Omar Sayed</td>
                            <td>26</td>
                            <td>2016</td>
                            
                        </tr>
                        <tr>
                            <td>Omarove</td>
                            <td>Omar Sayed</td>
                            <td>26</td>
                            <td>2016</td>
                            
                        </tr>
                        <tr>
                            <td>Omarove</td>
                            <td>Omar Sayed</td>
                            <td>26</td>
                            <td>2016</td>
                            
                        </tr>
                        <tr>
                            <td>Omarove</td>
                            <td>Omar Sayed</td>
                            <td>26</td>
                            <td>2016</td>
                            
                        </tr>
                        </tbody>
                    </table>






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

