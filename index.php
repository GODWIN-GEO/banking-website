<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		body{
			background-image: url("images/child.jpg");
			background-repeat: no-repeat;
  			background-size: 1600px 800px;
        margin: 0;
		}
    	h1{
      font-size: 90px;
      text-align: center;
      color: red;
      text-shadow: 3px 3px #262626;
    }
    	button{
      font-size: 30px;
      padding: 25px 50px;
      justify-content: center;
      background-color: #071a3d;
      color:white;
      text-decoration: none;
      border-radius: 50px;

    }
    	h5{
      text-align: center;
      font-size: 35px;
      color: #83c9d4;
      text-shadow: 1px 1px #3b5278;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
    	padding-left: 560px;
      border-radius: 10px;
      padding-top: 1px;
    }
    h3{
    	text-align: center;
    	font-size: 24px;
    	color: black;
      text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
      text-decoration: none;
    }
    button:hover{
      background-color: black;
      text-decoration: none;
    }
    .bye:hover{
      background-color: #83c9d4;
      border-radius: 15px;
    }

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php include 'connection.php' ?>


  <div id="navbar" style="padding: 10px; font-size: 24px;">
  <a class="hi" href="#home">HOME</a>
  <a class="hello" href="table.php">User List</a>
  <a class="bye" href="transaction.php">History</a>
  </div>


	 <h1>Basic Banking System</h1>
  <h5><i>Money transfer got EASY</i></h5>
  <h3><marquee width="60%" direction="right" height="100px">Banking is Necessary,Banks are Not!!</marquee></h3>
  
  <div class="container">
    <button><a href="money.php">Send Money</a></button>
  </div> </br>
  <footer style="text-align: center; background-color: yellow; font-weight: bold;">@ Godwin Geo</footer>



</body>

	

</body>
</html>