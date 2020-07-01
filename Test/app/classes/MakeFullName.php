<?php
namespace App\Classes;

class MakeFullName
{
    public function fullName()
    {
        $firstName = $_POST['first_name'];
        $lastName  = $_POST['last_name'];
        $fullName  = $firstName.' '.$lastName;
        return $fullName;
    }

}