<?php  
include "db.php";
include"nav.php";
if(ISSET($_POST['submit'])){
    $name= $_POST['name'];
    $url= $_POST['url'];
$add= "INSERT into url(`name`,`url`) Values ('$name','$url')";
mysqli_query($con,$add);
};
if(ISSET($_POST['del'])){
    $id= $_POST['id'];
$del= "DELETE FROM `url` WHERE id='$id'";
mysqli_query($con,$del);//delete id
};
if(ISSET($_POST['delall'])){
    $id= $_POST['id'];
$delall= "DELETE FROM `url` WHERE `id`";//delet all 
mysqli_query($con,$delall);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>urly</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>

.mother{
    width: 100%;
    display: flex;
}
main{
    float: left;
    width: 75%;
    background-color: black;
    overflow: scroll;
height: 90vh;
}
form{
    width: 25%;

}
aside{
    float: right;
    background-color: goldenrod;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    height: 90vh;
}
table{
    width: 100%;
  
    color: white;
padding: 7px;
border-radius: 7px;

}
table tr{
    width: 100%;
    border:1px solid #c1c1c1;
    padding: 7px;
border-radius: 7px;

}
table td,th{
    border:1px solid #c1c1c1;
    margin: 5px;
    padding: 5px;

}
table td:hover{
    background-color: hwb(0 50% 50%);
}
table a{
    color: red;
}
@media (max-width: 768px) {
    .mother{
        display: block;
    }
    main{
        width: 100%;
    }
    aside{
        width: 100%;

    }
    form{
        width: 100%;

    }
}
  </style>
</head>



<body>
    <div class="mother">

<form method="POST" action="">
    <aside>
        <img src="url.png" alt="urly" width="100px"><br><br>
        <label for="basic-url" class="form-label">Entre name</label>
        <input type="text" name="name">
        <label for="basic-url" class="form-label">Entre url</label>
        <input type="text" name="url"><br>
<button class="btn btn-primary me-md-2" name="submit">submit</button>

<aside>
<form method="POST" action="">
<label for="basic-url" class="form-label">Entre ID</label>
        <input type="text" name="id"><br>
        <button class="btn btn-primary me-md-2" name="del">delete</button>
    </form>
</aside>


    </aside>
</form>

<main >
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>URL</th>
    </tr>
    <?php 
    $result =  mysqli_query($con,"select * from `url`");
    while ( $row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['url']."</td>";

        echo"</tr>";
    }
      

    ?>
</table>
</main>

    </div>



    <script src="bootstrap.js"></script>
   


</body>
</html>