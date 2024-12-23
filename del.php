<?php  
include "db.php";
if(ISSET($_POST['delall'])){
    $id= $_POST['id'];
$delall= "DELETE FROM `url` WHERE `id`";
mysqli_query($con,$delall);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin-top: 900px;
            height: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            font-size:90px;
        }
    </style>
</head>
<body>
    <div style="width: 500vh;"></div>
<a href="index.php">back</a>
  <div>
  <form method="POST" action="index.php">
            <button class="btn btn-danger me-md-2" name="delall">delete All</button>

            </form>
            ammar chacal
  </div>
          
              
        
</body>
</html>