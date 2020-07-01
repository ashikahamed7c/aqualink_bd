<?php
require_once './vendor/autoload.php';

use App\Classes\MakeSerialNumber;

$result = [];
if (isset($_POST['btn']))
{
    $makeSerialNumber = new MakeSerialNumber();
    $result = $makeSerialNumber->printSerialNumber();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.css"/>
    <title>Serial Number</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center bg-dark text-white mt-5 ">Serial Number print</h1>
                <form action="" method="post">
                    <table class="table table-bordered text-center text-white">
                        <tr>
                            <th class="bg-secondary border ">Starting Number</th>
                            <td class="bg-secondary"><input type="number" name="starting_number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <th class="bg-secondary border">Ending Number</th>
                            <td class="bg-secondary"><input type="number" name="ending_number" class="w-50"/></td>
                        </tr>
                        <tr>
                            <th class="bg-secondary border pt-5">Result</th>
                            <td class="bg-secondary"><textarea rows="5" cols="22" class="w-100" ><?php foreach ($result as $item) {echo $item.', ';}?></textarea></td>
                        </tr>
                        <tr class="bg-dark">
                            <th></th>
                            <td><input type="submit" name="btn" class="bg-success" value="Submit"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</body>
</html>


