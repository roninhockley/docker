			<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        
                        <?php 

                
                        //$users = User::find_all_users();
                        //echo "ALL Users:<br>";
                        //foreach($users as $user) {
                            //echo $user->id." ".$user->username."<br>";
                        //}

                        //$id = 1;
                        //$found_user = User::find_user_by_id($id);
                        //if ($found_user) {
                           // echo "<br>UserID is:".$id."<br>";
                          //  echo $found_user->username."<br>";
                        //}
                        //else
                            //echo "No user found with id=$id!<br>";
                        
                        /*$inserted_user = new User;
                        $inserted_user->first_name = "Jaden";
                        $inserted_user->last_name = "Fish";
                        $inserted_user->username = "jfish";
                        $inserted_user->password = "1233";

                        if (!$inserted_user->create())             
                            //echo "<br>Userid of inserted user is ".$inserted_user->id." <br>";    
                            echo "<br>Create failed for username=".$inserted_user->$username." <br>";
                        */
                        /* $id=11;
                        $updated_user = User::find_user_by_id($id);
                         if ($updated_user) {
                            $updated_user->last_name = "Fish";  // update one of the fields
                        } else {
                            die ("User with id of $id was not found, so cannot update.");
                        }
                       

                        if (!$updated_user->update())             
                            //echo "<br>Userid of inserted user is ".$inserted_user->id." <br>";    
                            echo "<br>Update failed for UserID=".$updated_user->id." <br>";
                        else
                            echo "<br>Update succeeded for UserID=".$updated_user->id." <br>";
                        */

                        /*$id = 11;
                        $user_to_delete = new User;
                        $user_to_delete->id = $id;
                        if (!$user_to_delete->delete())             
                            //echo "<br>Userid of inserted user is ".$inserted_user->id." <br>";    
                            echo "<br>Delete failed for UserID=".$user_to_delete->id." <br>";
                        else
                            echo "<br>Delete succeeded for UserID=".$user_to_delete->id." <br>";
                        */
                       
                        //$user = User::find_user_by_id(2);
                        //$user = new User();

                        //$user->username = "WHATEVER_2000";
                        //$user->save();

                        //if ($found_user) {
                        //    echo "<br>UserID is:".$id."<br>";
                        //    echo $found_user->username."<br>";
                        //}
                        //else
                        //    echo "No user found with id=$id!<br>";

                        // using an abstracted table to delete:
                        //$user = User::find_user_by_id(14);
                       
                        //$user->delete();

                        // using an abstracted table to create/save:
                        //$user = new User;
                        //$user->username = "SUAVE";
                       
                        //$user->save();

                        // using an abstracted table to update;
                        //$user = User::find_user_by_id(15);
                       
                        //$user->last_name = "alastname";  // update one of the fields
                        
                        //$user->update();

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
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->