<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>
<?php
    //$session->message = ""; 
    if(empty($_GET['id'])) {
        redirect("photos.php");
    }
    $comments = Comment::find_the_comments($_GET['id']);
    //echo "These are comments for photo id {$_GET['id']}";
?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            

            <?php include("includes/top_nav.php"); ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            


            <?php include("includes/side_nav.php"); ?>



            <!-- /.navbar-collapse -->
        


        </nav>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comments
                            <small><?php echo "LIST PHOTO ID {$_GET['id']} COMMENTS"; ?></small>
                        </h1>
                        
                        <p class="bg-success"><?php echo $session->message(); ?></p>
                        <div class="col-md-12">    
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        
                                        <th>Author</th>
                                        <th>Body</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        foreach ($comments as $comment) {  
                                    ?>
                                            
                                    <tr>
                                        <td><?php echo $comment->id;  ?></td>
                                      
                                        <td><?php echo $comment->author;  ?>
                                            <div class="action_links">

                                                <a href="delete_comment_photo.php?id=<?php echo $comment->id; ?>">Delete</a>

                                            </div>
                                        </td>
                                        <td><?php echo $comment->body; ?></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table> 

                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.col-lg-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /#page-wrapper -->
    
  <?php include("includes/footer.php"); ?>