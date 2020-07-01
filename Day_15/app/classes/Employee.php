<?php
namespace App\Classes;

class Employee
{
    public function getEmployeeInfo(){
       $link =  mysqli_connect('localhost', 'root', '', 'employee');
       $sql = "INSERT INTO employees (name, father, mother, email, mobile, address, city, code, country, opinion)
          VALUE ('$_POST[name]', '$_POST[father]', '$_POST[mother]', '$_POST[email]', '$_POST[mobile]',
                 '$_POST[address]', '$_POST[city]', '$_POST[code]', '$_POST[country]', '$_POST[opinion]' )";

       if (mysqli_query($link, $sql)){
            $massage = 'Employee Info Successfully Save';
            return $massage;
       }else {
           die('Query Problem'.mysqli_error($link));
       }

    }



}