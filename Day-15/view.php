<?php
require_once './vendor/autoload.php';
use App\Classes\Student;

        $queryResult = '';
        $student = new Student();
        $queryResult = $student->getStudentInfo();

?>

<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr/>

<table border="1" width="600">
    <tr>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th>Action</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)) {?>
    <tr>
        <td><?php echo $student['name'];?></td>
        <td><?php echo $student['email'];?></td>
        <td><?php echo $student['mobile'];?></td>
        <td>
            <a href="edit.php  ?id=<?php echo $row['id']; ?>  ">Edit</a> ||
            <a href="">Delete</a>
        </td>
    </tr>
    <?php }?>
</table>
