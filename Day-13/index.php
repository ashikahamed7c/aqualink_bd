<?php
require_once './vendor/autoload.php';
use App\Classes\SerialNumber;

$result ='';
$res = '';
if (isset($_POST ['btn'])){
    $serialNumber = new SerialNumber();
    $serialNumber->makeSerialNumber();
    $result = $serialNumber->makeSerialNumber();

    $res = $serialNumber->makeCharacterNumber();
}


?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string </th>
            <td><input type="text" name="given_string"/></td>
        </tr>
        <tr>
            <th>Total Number of word</th>
            <td><input type="text" value="<?php echo $result;?>" /></td>
        </tr>
        <tr>
            <th>Total Number of character</th>
            <td><input type="text" value="<?php echo $res;?>" /></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"/></td>
        </tr>
    </table>
</form>





<!--darar jogfol-->

<!--<form action="" method="post">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <th>Starting Number</th>-->
<!--            <td><input type="number" name="starting_number"/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Ending Number</th>-->
<!--            <td><input type="number" name="ending_number"/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Result</th>-->
<!--            <td><textarea rows="5" cols="40">--><?php //$result;?><!--</textarea></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th></th>-->
<!--            <td><input type="submit" name="btn" value="SubmiT"/></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->






<!--<form action="" method="post">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <th>First Number</th>-->
<!--            <td><input type="number" name="starting_number"/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Ending Number</th>-->
<!--            <td><input type="number" name="ending_number"/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Your Choice</th>-->
<!--            <td>-->
<!--                <input type="radio" name="choice" value="odd"/>Odd-->
<!--                <input type="radio" name="choice" value="even"/> Even-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Result</th>-->
<!--            <td><textarea rows="5" cols="40">--><?php //foreach ($result as $item){echo $item.', '; }?><!--</textarea></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th></th>-->
<!--            <td><input type="submit" name="btn" value="SubmiT"/></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
