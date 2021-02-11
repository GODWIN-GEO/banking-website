<!DOCTYPE html>
<html>
<head>
	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 150px;
		}
		label{
			padding: 20px;
			justify-content: left;
			font-weight: 100px;
		}
		.container{
			width: 500px;
			
			padding-left: 500px;
		}
		.container input{
			width:100%;
			clear: both;
			height: 35px;
		}
		/*button{
			font-size: 30px;
      		padding: 10px 10px;
      		background-color: #071a3d; 
      		color: white;
		}*/
		.press{
			padding-top: 20px;
			padding-left: 650px;
		}
		body{
			background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-031.jpg");
			margin: 0;
		}
		.click{
			width: 20px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
			border-radius: 15px;
		}
		.click:hover{
			background-color: black
		}
		.rupees{
			border-radius: 15px;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
		<div id="navbar"  style="padding: 10px; font-size: 24px;">
  <a class="hi" href="index.php">HOME</a>
  <a class="hello" href="table.php">User List</a>
  <a class="bye" href="transaction.php">History</a>
  </div>
	<div class="container">
		<form action="transfer.php" method="get">
			<label><b>Sender </b></label>
			<input class="rupees" list="names" type="text" name="sender_name", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Godwin"></option>
				<option value="Mark"></option>
				<option value="David"></option>
				<option value="John"></option>
				<option value="Deepa"></option>
				<option value="Angeline"></option>
				<option value="Mathew"></option>
				<option value="Samuel"></option>
				<option value="Riya"></option>
				<option value="Gowtham"></option>
				
			</datalist>
		</br>
			<label><b>Receiver </b></label>
			<input class="rupees" list="namess" type="" name="receiver_name" placeholder="Enter email here" required>
			<datalist id="namess">
				<option value="Godwin"></option>
				<option value="Mark"></option>
				<option value="David"></option>
				<option value="John"></option>
				<option value="Deepa"></option>
				<option value="Angeline"></option>
				<option value="Mathew"></option>
				<option value="Samuel"></option>
				<option value="Riya"></option>
				<option value="Gowtham"></option>
				
			</datalist>
		</br>
			<label><b>Amount </b></label>
			<input class="rupees" type="" name="amount" placeholder="Enter amount here" required></br>
			<input class="click" type="submit" name="" value="Send Money">

		</form>
	</div>

<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>

	</div> -->
	

</body>
</html>