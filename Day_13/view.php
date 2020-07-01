<?php
require_once './vendor/autoload.php';
use App\Classes\JustNumber;
$result =[];
if (isset($_POST['btn']))
{
    $serialNumber = new JustNumber();
    $result = $serialNumber->printNumber();

}


?>
<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="first_number"/></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="number" name="last_number"/></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd"/>Odd
                <input type="radio" name="choice" value="even"/> Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea cols="40" rows="5"><?php foreach ($result as $item){echo $item.', ';} ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit"  name="btn" value="SubmiT"/></td>
        </tr>
    </table>
</form>
