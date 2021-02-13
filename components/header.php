<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/0c3d09c6cb.js"></script>
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>wesell</title>

</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo">Wesell</label>
        <ul>
<<<<<<< HEAD
            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 1){

            ?>
            <li><a href='dashboard.php'>Dashboard</a></li>
            <?php
            }
            ?>
=======
            <li><a href='dashboard.php'>Dashboard</a></li>
>>>>>>> 0aa92eaa8a6545e5688272611093af378748a87f
            <li><a href='index.php'>Home</a></li>
            <li><a href='products.php'>Products</a></li>
            <li><a href='about.php'>About</a></li>
            <li><a href='contact.php'>Contact</a></li>
            <?php
            if (!isset($_SESSION['role'])) {

            ?>
                <li><a href='login.php'>Login</a></li>
            <?php
            }
            ?>
            <?php
<<<<<<< HEAD
            
            
            if (isset($_SESSION['role']) && ($_SESSION['role'] == 1 || $_SESSION['role'] == 0)){
               
=======


            if (isset($_SESSION['role']) && ($_SESSION['role'] == 1 || $_SESSION['role'] == 0)) {

>>>>>>> 0aa92eaa8a6545e5688272611093af378748a87f
            ?>
                <li><a href='../code/logout.php'>Logout</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>