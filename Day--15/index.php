<?php
require_once './vendor/autoload.php';
use App\Classes\Project;

    $success = '';
    if (isset($_POST['btn']))
    {
        $project = new Project();
        $success = $project->saveProject($success);
    }

?>

<h1><?php echo $success;?></h1>
<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr>
<form action="" method="post">
    <table>
        <tr>
            <th>Student Name</th>
            <td>
                <input type="text" name="name"/>
            </td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td><input type="text" name="email"/></td>
        </tr>
        <tr>
            <th>Student Mobile</th>
            <td><input type="number" name="mobile"/></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="SubmiT"/>
            </td>
        </tr>
    </table>
</form>
