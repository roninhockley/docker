			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        
                        <?php 

                        //$photo = Photo::find_by_id(4);
                        //echo $photo->title;

                        // A place to test CRUD methods, or other functions, properties, etc., 
                        // defined in Class or other php files.
                        //
                        // Testing the 'abstracted' create() and save() methods:
                        //$user = new User();
                        
                        //$user->username = "NEW USER";
                        //$user->save();
                        //$user->password = "1233";
                        //$user->first_name = "Midnight";
                        //$user->last_name = "Fish";
                        //$user->create();


                        // Testing the 'abstracted' update() method:
                        

                        //if ($user = User::find_by_id(15)) {
                            //$user->password = "1989";
                        //} else {
                            //die ("User with id of 16 was not found, so cannot update.");
                        //}
                       

                        //$user->update();
                        //if (!$user->update())             
                            //echo "<br>Update failed for UserID=".$user->id." <br>";
                        //else
                            //echo "<br>Update succeeded for UserID=".$user->id." <br>"; 


                        // testing "Late Static Binding" issue when using self 
                        // fix is to 
                        //    (1)replace all "self::" instances in db_object.php with "static::"
                        //    (2)make a call to "get_called_class()" in db_object.php and use 
                        //       that returned value with 'new' instead of using 'self' with 'new' 
                        //       in instantiation()

                        //$users = User::find_all();

                        //foreach ($users as $user) {
                        //    echo $user->username."<br>";
                        //}




                        // testing newly abstracted db_object methods in photo.php
                        // testing find_all().
                        //$photos = Photo::find_all();

                        //foreach ($photos as $photo){
                        //    echo $photo->title;
                        //}

                        // testing create().
                        //$photo = new Photo();
                        
                        //$photo->title = "Photo from the coast";
                        //$photo->description = "Another description";
                        //$photo->filename = "coast_image1.jpg";
                        //$photo->type = "image";
                        //$photo->size = 26;
                        //$photo->create();

                        //echo SITE_ROOT."<br>";
                        //echo INCLUDES_PATH;

                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>  <!-- /.row --> 
            </div> <!-- /.container-fluid -->         