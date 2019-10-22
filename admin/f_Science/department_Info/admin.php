<?php
session_start();

if(!isset($_SESSION['name'])){
    header("Location: ../admin/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>สหกิจศึกษา</title>
    


<h3> Login Admin page successfull     <font color="#990000" > <?php echo $_SESSION['name']; ?> </font></h3>
</head>
</html>
    
   