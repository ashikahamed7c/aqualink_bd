<?php
require_once './vendor/autoload.php';
use App\Classes\First;
$id = $_GET['id'];
$student = new First();
$edit = $student->getEdit($id);
$editInfo = mysqli_fetch_assoc($edit);

if (isset($_POST['btn']))
{
    $student->updateFirst();
}



?>
<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr>
<form action="" method="post">
    <table>
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
            <td><input type="number" value="<?php echo $editInfo['mobile']?>"  name="mobile"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"/></td>
        </tr>
    </table>
</form>
