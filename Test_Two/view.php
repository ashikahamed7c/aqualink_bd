<?php
require_once './vendor/autoload.php';
use App\Classes\MakeCalculator;

$makeCalculator = new MakeCalculator();

print_r($_POST);
$btn = '';
 if(isset($_POST['btn'])){
     switch ($makeCalculator->calculator()){
         case '+';
         $btn = $this->calculator($btn) + $this->calculator($btn);
     }



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
            <th>Full Number</th>
            <td><input type="text" size="" value="<?php echo $btn;?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+"/>
                <input type="submit" name="btn" value="-"/>
                <input type="submit" name="btn" value="*"/>
                <input type="submit" name="btn" value="/"/>
                <input type="submit" name="btn" value="%"/>
            </td>
        </tr>
    </table>
</form>
