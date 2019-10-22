
<?php
$db = mysqli_connect('localhost', 'root', '', 'system');
?>

<html>
<head>    
    <title>UNIMAS JOB RECRUITMENT SYSTEM</title>
</head>
 
<body>

    <header>
      <?php include('Home.php') ?>
   
      
    </header>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <th>id</th>
            <th>Title</th>
            <th>Company</th>
            <th>Job Description</th>
            <th>Update</th>
        </tr>
        <?php
            $sql ="select * from `advertise`";
            $query = $db->query($sql);


            while($row = $query->fetch_assoc()){
        ?>
       
        <tr>
            <td><?php echo ucwords($row['id']); ?></td> 
            <td><?php echo ucwords($row['title']); ?></td> 
            <td><?php echo ucwords($row['comp_name']); ?></td>
            <td><?php echo ucwords($row['post_job']); ?></td>
           <td class='move'>
            <a class="applybutton" href="update_job.php?cid=<?php echo $job_id; ?>">Edit</a>
            </td>
            

           <br> 
        </tr>   


    </table>
<?php 
    }
?>
</body>
</html>