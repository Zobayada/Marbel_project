<?php
session_start();
require 'forphp/connect.php';
if (!isset($_SESSION['user_login'])) {
	header('location:adminlogin.php');
}
$email=$_SESSION['email'];
$que = mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email'");
$ftch = mysqli_fetch_assoc($que);

$for_message_que = mysqli_query($conn,"SELECT * FROM `user_message`");
$count = mysqli_fetch_assoc($for_message_que)


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Document</title>

</head>
<body>

	<div class="container">
		<div class="row">
		    <div class="col-md-12">
		    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Admin Panal</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav text-right">
				      <li class="nav-item active text-right">
				        <a class="nav-link text-right" href="admin.php">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#"><?=$ftch['name']?></a>
				      </li>
				      <!-- <li class="nav-item">
				        <a class="nav-link" href="logout.php">All Message</a>
				      </li> -->
				      <li class="nav-item">
				        <a class="nav-link" href="logout.php">Logout</a>
				      </li>
				     <!--  <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				      </li> -->
				    </ul>
				  </div>
				</nav>
		    </div>
		</div>
       
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<br><br>
        		<h3 class="text-center">All Message(<?php echo  count($for_message_que) ?>) </h3>
        		<br>
        		<table class="table table-dark table-borderd">
        			<thead>
        				<tr>
        					<th>S.N</th>
        					<th>Name</th>
        					<th>Email</th>
        					<th>Message</th>
        					<th>Action</th>
        				</tr>
        			</thead>
        			<tbody>
                      <?php 
                      $i = 1;
                       
                       while ($for_mess_ftch = mysqli_fetch_assoc($for_message_que)) {
                       	
                       ?>

        				<tr>
        					<td><?=$i++?></td>
        					<td><?=$for_mess_ftch['name']?></td>
        					<td><?=$for_mess_ftch['email'] ?></td>
        					<td><?=$for_mess_ftch['message'] ?></td>
        					<td><a href="message_delete.php?id=<?php echo $for_mess_ftch['id']; ?>" class="btn btn-success"> <i class="fa fa-trash"></i> </a> 

        					<a href="message_delete.php?id=<?php echo $for_mess_ftch['id']; ?>" class="btn btn-info"> <i class="fa fa-edit"></i> </a> 

        					</td>
        				</tr>

        			<?php }?>
        			</tbody>
        		</table>
        	</div>
        	<div class="col-md-2"></div>
        </div>

	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	
</body>
</html>