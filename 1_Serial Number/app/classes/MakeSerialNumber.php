<?php
namespace App\Classes;

class MakeSerialNumber
{
    public function printSerialNumber()
    {
        $startingNumber = $_POST['starting_number'];
        $endingNumber   = $_POST['ending_number'];

        $res= [];
        for ($i = $startingNumber; $i<=$endingNumber; $i++)
        {
            array_push($res ,$i);
        }
       return $res;
    }

}