<?php

////    print_r($_POST);
//    $firstName =  $_POST['first_name'];
//    $lastName  =  $_POST['last_name'];
//    $fullName  =  $firstName.' '.$lastName;


//    $fistName = $_POST['first_name'];
//    $lastName = $_POST['last_name'];
//    $fullName = $fistName.' '.$lastName;

//print_r($_POST);
//$firstNumber = $_POST['first_number'];
//$lastNumber  = $_POST['last_number'];
////$Result      = $firstNumber.' '.$lastNumber;
//
//if ($_POST ['btn'] == '+'){
//    $Result = $firstNumber+$lastNumber;
//}
//if ($_POST['btn'] == '-'){
//    $Result = $firstNumber-$lastNumber;
//}
//if ($_POST['btn'] == '*'){
//    $Result = $firstNumber*$lastNumber;
//}
//if ($_POST['btn'] == '/'){
//    $Result = $firstNumber/$lastNumber;
//}
//if ($_POST['btn'] == '%') {
//    $Result = $firstNumber%$lastNumber;
//}

//if (isset($_POST['btn'])){
////    $firstNumber = $_POST['first_number'];
////    $lastNumber  = $_POST['last_number'];
////    $Result      = $firstNumber+$lastNumber;
////}

if (isset($_POST['btn'])){
    $firstNumber =  $_POST['first_number'];
    $lastNumber  =  $_POST['last_number'];
    $btn         =  $_POST['btn'];
    switch ($btn){
        case '+';
            $result = $firstNumber+$lastNumber;
            break;
        case '-';
            $result = $firstNumber-$lastNumber;
            break;
        case '*';
            $result = $firstNumber*$lastNumber;
            break;
         case '/';
             $result = $firstNumber/$lastNumber;
             break;
        case '%';
            $result = $firstNumber%$lastNumber;
    }
}


?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="first_number" value=""/></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="number" name="last_number" value=""/></td>
        </tr>
        <tr>
            <th>Result </th>
            <td><input type="number" name="" value="<?php echo $result;?>"/></td>
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





<!--<form action="" method="post">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <th>First Name</th>-->
<!--            <td><input type="text" name="first_name" value=""/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Last Name</th>-->
<!--            <td><input type="text" name="last_name" value=""/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Full Name</th>-->
<!--            <td><input type="text" value="--><?php //echo $fullName;?><!--"/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th></th>-->
<!--            <td><input type="submit" value="SubmiT"/></td>-->
<!--        </tr>-->
<!--    </table>-->
<!---->
<!--</form>-->


<!--<form action="" method="post">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <th>First Name</th>-->
<!--            <td><input type="text"  name="first_name" value=""/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Last Name</th>-->
<!--            <td><input type="text" name="last_name" value=""/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>Full Name</th>-->
<!--            <td><input type="text" value="--><?php //echo $fullName;?><!--"/></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th></th>-->
<!--            <td><input type="submit" value="SubmiT"/></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
