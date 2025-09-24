<?php session_start() ?>
<?php include('./common/db_connect.php') ?>
<?php include('./server/error_handler.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quora</title>
    <?php include('./client/common-files.php') ?>
</head>
<body>
    <?php 
    
    include('./client/navbar.php');

    if(isset($_GET['login'])){
        include('./client/login.php');
    } elseif(isset($_GET['signup'])){
        include('./client/signup.php');
    }

    ?>
    
    <!-- <div class="container"></div> -->

   

</body>
</html>