<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	
</head>
<body>
  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_GET["sender_name"];
	$receiver_name = $_GET["receiver_name"];
	$amount = $_GET["amount"];
	?>
	<h2>Congratulations!! Your Money Successfully Transfer TO <?php echo $receiver_name ?></h2>

</body>
</html>