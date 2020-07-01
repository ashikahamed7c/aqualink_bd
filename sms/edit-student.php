
<?php
session_start();
if (!isset($_SESSION['id'])){
    header('Location: index.php');
}

require_once './vendor/autoload.php';
use App\Classes\Project;

$id = $_GET['id'];
$project = new Project();
$edit = $project->editProject($id);
$editInfo = mysqli_fetch_assoc($edit);

if (isset($_POST['btn']))
{
    $project->updateProject();
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
            <li><a href="" class="nav-link">Home</a></li>
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
                    <form action="" method="post">
                        <table class="table table-bordered">
                            <tr>
                                <th>Student Name</th>
                                <td>
                                    <input type="text" value="<?php echo $editInfo['name']?>" name="name"/>
                                    <input type="hidden" value="<?php echo $editInfo['id']?>" name="id"/>
                                </td>
                            </tr>
                            <tr>
                                <th>Student Email</th>
                                <td><input type="text" value="<?php echo $editInfo['email']?>" name="email"/></td>
                            </tr>
                            <tr>
                                <th>Student Mobile</th>
                                <td><input type="number" value="<?php echo $editInfo['mobile']?>" name="mobile"/></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" name="btn" value="Update"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


