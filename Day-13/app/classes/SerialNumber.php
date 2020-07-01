<?php
namespace App\Classes;
class SerialNumber
{

    public function makeSerialNumber()
    {
        $startingNumber = str_word_count($_POST['given_string']);
        return $startingNumber;

    }
    public function makeCharacterNumber()
    {
        $startingNumber = strlen($_POST['given_string']);
        return $startingNumber;

    }








//                  <!--darar jogfol-->
//    public function makeSerialNumber()
//    {
//        $startingNumber = $_POST['starting_number'];
//        $endingNumber   = $_POST['ending_number'];
//        $res = 0;
//        for ($i = $startingNumber; $i<=$endingNumber; $i ++)
//        {
//            $res += $i; // $res = $res + $i
//
//        }
//        return $res;
//    }






                //// odd and even
//    public function makeSerialNumber()
//    {
//        $startingNumber = $_POST['starting_number'];
//        $endingNumber   = $_POST['ending_number'];
//        $choice         = $_POST['choice'];
////        $res ='';
//        $res = [];
//       for ($i = $startingNumber; $i<=$endingNumber; $i ++)
//       {
//           if ($choice == 'odd'){
//               if ($i % 2 == 1){
//                   array_push($res, $i);
//               }
//           }
//           if ($choice == 'even'){
//               if ($i % 2 == 0){
//                   array_push($res, $i);
//               }
//           }
////           $res .= $i.', ';
//       }
//       return $res;
//    }
}