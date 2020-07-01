<?php
session_start();
if (!isset($_SESSION['id'])){
    header('Location: index.php');
}

require_once './vendor/autoload.php';
use App\Classes\Project;
use App\Classes\Login;


$queryResult = '';
$student = new Project();
$queryResult = $student->viewProject();


$login = new Login();
if (isset($_GET['t'])){
    $login->adminLogout();
}

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $student->deleteProject($id);

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
    <title>Home </title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li><a href="home.php" class="nav-link">Home</a></li>
            <li><a href="add-student.php" class="nav-link">Add Student</a></li>
            <li><a href="view-student.php" class="nav-link">View Student</a></li>
        </ul>
        <ul class="navbar-nav">

            <li><a href="" class="nav-link"><?php echo $_SESSION['name'];?></a></li>

            <?php if (isset($_SESSION['id'])) {?>
                <li><a href="?t=p" class="nav-link">Sign Out </a></li>
            <?php } else {?>
                <li><a href="" class="nav-link">Login</a></li>
                <li><a href="" class="nav-link">Sign Up</a></li>
            <?php }?>

        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="text-center">Add Student</h4>
                </div>
                <div class="card-body  pb-0">
                    <table class="table table-bordered">
                        <thead>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Student Mobile</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        <?php while ($students = mysqli_fetch_assoc($queryResult)) {?>
                            <tr>
                                <td><?php echo $students['name'];?></td>
                                <td><?php echo $students['email'];?></td>
                                <td><?php echo $students['mobile'];?></td>
                                <td>
                                    <a href="edit-student.php?id=<?php echo $students['id']?>">Edit</a> ||
                                    <a href="?id=<?php echo $students['id']?>" onclick="return confirm('Are you sure to delete this!!')">Delete</a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


