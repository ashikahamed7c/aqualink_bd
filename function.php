<?php

//function ashik ($x, $y){
////    echo 'hello ashik';
////    $x = 10;
////    $y = 20;
//    $z = $x + $y;
////    echo $z;
//    return $z;
//
//}
//echo ashik(10, 20);
//echo '<br/>=======<br/>';
//echo ashik(100, 200);
//function ashik ($x = 200, $y = 200){
//    $z = $x + $y;
//    $t = 'hello ashik';
//    $data = [$z, $t];
//    return $data;
//}
//$a = 12;
//$b = 13;
//$res = ashik();
//echo $res[0];
//echo '<br/>========<br/>';
//echo $res[1];

//function fullName (){
////    $firstName = 'Ashik';
////    $lastName  =  'Ahamed';
//    $fullName  = 'Full name is '.$firstName.' '.$lastName;
//    echo $fullName;
//}
//
//fullName ('');
//echo '<br/>';
//fullName('Rajib', 'Mia');


//print_r($_POST);
//
//$firstName = $_POST['first_name'];
//$lastName  = $_POST['last_name'];
//$fullName  = $firstName.' '.$lastName;
//echo $fullName;

$result = '';

function makeFullName ()
{
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $fullName =  $firstName.' '.$lastName;
    return $fullName;
}
if (isset($_POST['first_name'])){
    $result = makeFullName();
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
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
                <td><input type="text" name="full_name" value="<?php echo $result;?>"/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn" value="submit"/></td>
            </tr>
        </table>
    </form>

</body>
</html>













