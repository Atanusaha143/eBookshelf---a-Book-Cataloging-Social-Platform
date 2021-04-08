<?php  
    session_start();
    include('../model/dbCon.php');
    
    $connection = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Document</title>
</head>
<body>
    <?php include('./header.php');?>
    <?php include('./navbar.php');?>
    
</body>
</html>