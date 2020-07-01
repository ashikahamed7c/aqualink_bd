<?php
    session_start();
    if (!isset($_SESSION['id'])){
        header('Location: index.php ');
    }
    require_once './vendor/autoload.php';
    use App\Classes\Login2;


    if (isset($_GET['a'])){
        $logOut = new Login2();
        $logOut->adminLogOut2();
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.css"/>
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <div class="container">
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="add-student2.php" class="nav-link">Add Student</a></li>
                <li><a href="view-student2.php" class="nav-link">View Student</a></li>
            </ul>
            <ul class="navbar-nav">

                <li><a href="" class="nav-link"><?php echo $_SESSION['name'];?></a></li>

               <?php if (isset($_SESSION['id'])) {?>
                    <li><a href="?a=b" class="nav-link">Sign Out</a></li>
               <?php } else {?>
                    <li><a href="" class="nav-link">Sign Up</a></li>
                    <li><a href="" class="nav-link">Login</a></li>
               <?php }?>
            </ul>
        </div>
    </nav>

    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
</body>
</html>
