<?php
require_once './vendor/autoload.php';
use App\Classes\Employee;
$massage= '';
if (isset($_POST['btn'])){
    $employee = new Employee();
    $massage = $employee->getEmployeeInfo();

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
    <title>Human Resource Management</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="com-md-12">
                <h1 class="text-center font-italic bg-dark text-secondary mt-5"> "Human Resource Management"</h1>
                <h1><?php echo $massage;?></h1>
                <hr class="bg-success">
                <a href="index.php" class="border text-white bg-success m-5"> Add Employee</a>
                <a href="view.php" class="border text-white bg-success m-5"> View Employee</a>
                <hr class="bg-success"/>

                <form action="" method="post">
                    <table class="table border text-center table-dark">
                        <tr>
                            <th class="border">Employee Name</th>
                            <td class="border"><input class="w-100" type="text" name="name"/></td>
                        </tr>
                        <tr>
                            <th class="border">Father Name</th>
                            <td class="border"><input class="w-100" type="text" name="father"/></td>
                        </tr>
                        <tr>
                            <th class="border">Mother Name</th>
                            <td class="border"><input class="w-100" type="text" name="mother"/></td>
                        </tr>
                        <tr>
                            <th class="border"> Email</th>
                            <td class="border"><input class="w-100" type="text" name="email"/></td>
                        </tr>
                        <tr>
                            <th class="border"> Mobile</th>
                            <td class="border"><input class="w-100" type="number" name="mobile"/></td>
                        </tr>
                        <tr>
                            <th class="border">Address</th>
                            <td class="border"><input class="w-100" type="text" name="address"/></td>
                        </tr>
                        <tr>
                            <th class="border">City</th>
                            <td class="border"><input class="w-100" type="text" name="city"/></td>
                        </tr>
                        <tr>
                            <th class="border">Portal Code</th>
                            <td class="border"><input class="w-100" type="text" name="code"/></td>
                        </tr>
                        <tr>
                            <th class="border">Country</th>
                            <td class="border"><input class="w-100" type="text" name="country"/></td>
                        </tr>
                        <tr>
                            <th class="border">Worker Opinion</th>
                            <td class="border"><textarea  name="opinion" class="col-23 w-100 h-100 mr-5"></textarea></td>
                        </tr>
                        <tr>
                            <th>Click Here</th>
                            <td><input type="submit" name="btn" value="SubmiT"/></td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </div>

</body>
</html>