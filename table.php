<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style type="text/css">
        th,tr,td{
            border: 1px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
        table{
            width: 800px;
            height: 500px;
            color: black;
            font-size: 25px;
            border-color: white;
        }
        h1{
            text-align: center;
            color: black;
            font-size: 50px;

        }
        body{
            background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-031.jpg");
            background-repeat: no-repeat;
            background-size: 1600px 800px;
            margin: 0;
        }
        th, td{
            text-align: center;
            border: 1px solid #071a3d ;
            color: black;
            border-radius: 7px;
        }
        th{
            background-color: #071a3d ;
            color: white;
            border-radius: 15px;

        }
        .bye:hover{
      background-color: #83c9d4;
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
    <?php include 'connection.php' ?>
    <h1>User List</h1>
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT Id, Name, Email, Balance FROM bank";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

</body>
</html>

