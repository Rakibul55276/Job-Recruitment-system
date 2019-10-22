<?php
 //we need session for the log in thingy XD 
    include("functions.php");
    
?>

<?php
  session_start();
  if($_SESSION['username']=='')
  {
     header('location:home_admin.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request System in PHP and MySql</title>

    <script src="js/a.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">

            
          </a>
            <div class="pull-right">
                <?php
                if (isset($_POST['home'])) {

                  header('location:position_modal.php');
                  # code...
                }


                if (isset($_POST['logout'])){
                    session_destroy();
                    header('location:login.php');
               }
             
    
                ?>
                <form method="post">
        
                    <button name="home" class="btn btn-primary my-2">Home</button>

                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                </form>
            </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <?php
            
                $query = "select * from `requests`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                
                    <h1 class="jumbotron-heading"><?php echo $row['status_title'] ?></h1>
                      <p class="lead text-muted"><?php echo $row['status'] ?></p>
                      <p>
                        <a href="update_post.php?id=<?php echo $row['post_id'] ?>"name="post1" class="btn btn-primary my-2">Edit</a>

                        <a href="accept.php?id=<?php echo $row['post_id'] ?>"name="post1" class="btn btn-primary my-2">Accept</a>
                        <a href="reject.php?id=<?php echo $row['post_id'] ?>" class="btn btn-secondary my-2">Delete</a>
                      </p>
                    <small><i><?php echo $row['status_time'] ?></i></small>
            <?php
                    }
                }else{
                    echo "No Pending Requests.";
                }
            ?>
          
        </div>
          
      </section>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
