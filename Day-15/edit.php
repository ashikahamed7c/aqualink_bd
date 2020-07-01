<?php
require_once './vendor/autoload.php';
use App\Classes\Student;

        $id = $_GET['id'];
        $student = new Student();
        $queryResult = $student->getStudentInfoId('$id');
        $studentInfo = mysqli_fetch_assoc($queryResult);

   


?>


<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr/>
<form action="" method="post">
    <table>
        <tr>
            <th>Student Name</th>
            <td><input  type="text" value="" name="name"/></td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td><input  type="text" value="" name="email"/></td>
        </tr>
        <tr>
            <th>Student Mobile</th>
            <td><input  type="number" value="" name="mobile"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input  type="submit" name="btn" value="Update"/></td>
        </tr>
    </table>
</form>

