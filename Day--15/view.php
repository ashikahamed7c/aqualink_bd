<?php
require_once './vendor/autoload.php';
use App\Classes\Project;

    $queryResult = '';
    $student = new Project();
    $queryResult = $student->viewProject();

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $student->deleteProject($id);

    }





?>
<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr>

<form action="" method="post">
    <table border="1" width="600">
        <tr>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student Mobile</th>
            <th>Action</th>
        </tr>
        <?php while ($students = mysqli_fetch_assoc($queryResult)) {?>
            <tr>
                <td><?php echo $students['name'];?></td>
                <td><?php echo $students['email'];?></td>
                <td><?php echo $students['mobile'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $students['id']?>">Edit</a> ||
                    <a href="?id=<?php echo $students['id']?>" onclick="return confirm('Are you sure to delete this!!')">Delete</a>
                </td>
            </tr>
        <?php }?>

    </table>

</form>