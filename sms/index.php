<?php

    session_start();
    if (isset($_SESSION['id'])){
        header('Location: home.php');
    }

    require_once './vendor/autoload.php';
    use App\Classes\Login;


    $message= '';
    if (isset($_POST['btn'])){
        $logIn = new Login();
        $message = $logIn->adminLoginCheck();
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Login Form</h4>
                        </div>
                            <div class="card-body">
                                <h4 class="text-danger text-center"><?php echo $message;?></h4>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
</body>
</html>

