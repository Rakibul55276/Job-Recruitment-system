<?php include 'session.php'; ?>
<?php 
include 'conn.php';
include 'navbar.php';
include 'topnav.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNIMAS JOB RECTUITMENT SYSTEM</title>
    <meta name="description" content="Neuon AI -- Company Website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/animate.min.css" />
    <link rel="stylesheet" href="../css/ionicons.min.css" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  
  
 
<body>
    <nav id="topNav" class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand page-scroll" href="index.php"><i class="ion-ios-analytics-outline"></i> UNIMAS JOB RECTUITMENT SYSTEM</a>
        </div>
    </nav>
  
  

<div class='move'>
  <span>
  <h4 class="text3">Employers</h4>
  <table>
  </br></br></br></br>
        
      <?php 
      $sql ="select * from `employers`";
      $query = $con->query($sql);
        while($row = $query->fetch_assoc()){
      ?>

      <?php $id = $row['usr_id']; ?>
      <tr>
      <td>
      <p class='jobtext2'><?php echo ucwords($row['company']); ?></p>
      <p class='jobtext1'><?php echo ucwords($row['username']); ?>,<br><br>
        <?php echo ucwords($row['c_type']);?>,
        <br><br><?php echo ucwords($row['email']);?>,
        <br><br><?php echo ucwords($row['website']);?>,
        <br><br><?php echo ucwords($row['language']);?>,
        <br><br><?php echo ucwords ($row['about']);?>
      </p>
      </td>
      
      <td class='move'>
        <?php
        $image = $row['image'];
        echo "<img src='../user_images/$image' class='imagedb'>";
        ?>
      </td>
	 
	  
	  <td>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo '<a href="del_emp.php?pid='.$id.'" class="btn btn-default">Delete</a>';?>
	  </td>
	  
      </tr>
      <?php 
        }
      ?>
      
    </table>
  </span>
</div>



</body>