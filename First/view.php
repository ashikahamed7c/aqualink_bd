<?php
require_once './vendor/autoload.php';
use App\Classes\First;


    $view ='';
    $student = new First();
    $view = $student->getview();

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        $student->deleteFirst($id);
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
        <?php while ($students = mysqli_fetch_assoc($view)) {?>
        <tr>
            <td><?php echo $students['name']?></td>
            <td><?php echo $students['email']?></td>
            <td><?php echo $students['mobile']?></td>
            <td>
                <a href="edit.php?id=<?php echo $students['id']?>">Edit</a>||
                <a href="?id=<?php echo $students['id']?>">Delete</a>
            </td>
        </tr>

        <?php }?>
    </table>
</form>
