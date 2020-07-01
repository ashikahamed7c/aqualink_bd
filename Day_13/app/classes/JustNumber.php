<?php
namespace App\Classes;
class JustNumber
{
    public function printNumber()
    {
        $firstNumber = $_POST['first_number'];
        $lastNumber = $_POST['last_number'];
        $choice = $_POST['choice'];
        $res = [];
        for ($i = $firstNumber; $i<=$lastNumber; $i++)
        {
            if ($choice == 'odd'){
                if ($i % 2 == 1){
                    array_push($res, $i);
                }
            }
            if ($choice == 'even'){
                if ($i % 2 == 0){
                    array_push($res, $i);
                }
            }

        }
        return $res;



    }


}