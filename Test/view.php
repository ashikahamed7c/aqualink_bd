<?php
require_once './vendor/autoload.php';
use App\Classes\MakeFullName;


$makeFullName = new MakeFullName();
$result ='';
 if(isset($_POST['btn'])){
    $result =$makeFullName->fullName();
}




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
            <td><input type="text" name="" value="<?php echo $result;?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
    </table>
</form>
