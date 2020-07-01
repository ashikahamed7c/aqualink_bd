<?php
require_once './vendor/autoload.php';
use App\Classes\makeFullName;
use App\Classes\Example;

$ashik = new App\Classes\makeFullName();
echo $ashik->name;





?>
<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name" value=""/></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name" value=""/></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="" value=""/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submiT"/></td>
        </tr>
    </table>
</form>
