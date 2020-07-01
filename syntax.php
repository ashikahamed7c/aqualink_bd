


<?php
//  $first_name ='Rohim';
//  $fristName = 'Raju';
// echo $first_name;
// echo '<br/>';
// echo $fristName;
// $firstName = 'Rohim';
// $lastName = 'Hassan';
// echo "Full name is $fristName $lastName";
//echo 'Full name is '.$fristName."".$lastName;


//$firstName = 'ashik';
//$lastName = Ahamed;

//echo $firstName.''.'<br/>';
//
//var_dump($firstName);
//$firstName = "Rohim";
//$lastName = 'Khan';
//
//echo $firstName.' '.$lastName;

/*------------------------------syntax-----------------------------*/
/*------------------------variable & data type---------------------*/
/*--------------------------------operator------------------------------*/
            /*
             * arithmetic operator
                *Binary (+, -, *, /, %)
                *Unary (++, --, (-))
             * assignment operator (=, +=, -=, /=, %=, .=)
             * conditional operator (>, >=, <, <=, ==, !=,===, !===)
             * logical operator (and &&, or ||, not !)
            */

            //    $x = 10;
            //    $y = 20;
            //    $z = 30;

            //    $a = false;
            //    echo !$a;
            //    echo ($x>$y) || ($y<$z);
            //    echo ($x<$y) && ($y<$z);

            //  echo $x += $y;
            //  echo '<br/>';
            //echo $x.=$y;
            //echo $x!=$y;

/*--------------------------statement-------------------------------*/
            /*
              *conditional statement
                    *IF
                    *IF ELSE
                    *IF ELSE IF
                    *SWITCH
              *Repeated statement
                     * FOR
                     * WHILE
                     * DO WHILE
                     * FOR EACH
             */



            /* CONDITIONAL STATEMENT */
                     # IF
//                        $a = 10;
//                        if ($a<20) {
//                            echo $a;
//                        }
                    # IF ELSE
//                        $a = 10;
////                        if ($a>20) {
////                            echo $a;
////                        } else{
////                            echo 'Hello World';
////                        }
                     # IF ELSE IF
//                                $a = 10;
//                                $b = 20;
//                                $c = 30;
//                                if ($a>$b) {
//                                    echo 'hello world';
//                                } elseif ($b>$c){
//                                    echo 'hello bdjobs';
//                                } elseif ($c<$a) {
//                                    echo 'hello bangladesh';
//                                }else{
//                                    echo 'hello ashik';
//                                }
                    # SWITCH
//                            $a = 10;
//                            $b = 20;
//                            $c = 30;
//                            switch ($a){
//                                case 10;
//                                    echo 'hello world';
//                                    break;
//                                case 20;
//                                    echo 'hello bangladesh';
//                                    break;
//                                case 30;
//                                    echo 'hello dhaka';
//                                    break;
//                                default;
//                                    echo 'Hello php';
//                                    break;
//                            }

//$favcolor = '';
//switch ($favcolor){
//    case 'blue';
//        echo 'Your favourite color is bule';
//        break;
//    case 'red';
//        echo 'Your favourite color is red';
//        break;
//    case 'green';
//        echo 'Your favourite color is green';
//        break;
//    default;
//    echo 'Your favourite color neither bule, green or red';
//}
//
//$firstName = "";
//switch ($firstName){
//    case 'ashik';
//        echo 'I am Ashik ';
//        break;
//        case "freelancer";
//        break;
//        default;
//        echo "Name Not Found";
//}

//$age = '';
//if ($age ==12){
//    echo "You can't register";
//}elseif($age ==13){
//    echo "You are under 18 years old. You can't register";
//}elseif ($age==18){
//    echo "Congratulation! you can register";
//}else{
//    echo "Nothing found";
//}

//$age = 10;
//$bdage = 10;
//if ($age <= $bdage){
//    echo 'Ami sommoti dilam';
//} else{
//    echo 'Ami sommoti dilam na';
//}


                        /*-Repeated Statement -*/
                                    #FOR
                                    #WHILE
                                    #DO WHILE
                                    #FOR EACH

#FOR
//
//for ($i=50; $i<=60; $i++){
//    echo $i.'<br/>';
//    if ($i == 55){
//        break;
//    }
//}
////
//for ($x = 0; $x <= 10; $x++) {
//    echo "The number is: $x <br>";
//}
//for ($i = 1; $i<=5; $i++){
//    echo "hello world <br/>";
//}
//
//for ($i =50; $i>=101; $i++){
//    echo $i."<br/>";
//}
//for ($name =10; $name<=20; $name++){
//    echo $name.'<br/>';
//    if ($name==15){
//        break;
//    }
//}
//for ($i=50; $i<=60; $i++) {
//    echo $i.'<br/>';
//}

#WHILE
//
//$i =10;
//while ($i<=15){
//    echo $i.'<br/>';
//    $i++;
//}
# DO WHILE
//$i= 10;
//do{
//    echo $i.'<br/>';
//    $i++;
//}while ($i<=15);

# FOR EACH
//$a = [
//  'name' =>'Rohim',
//  'city' =>'Dhaka',
//  'country' =>'Bangladesh',
//];
//
//foreach ($a as $value){
//    echo $value.'<br/>';
//}



/*------------------------Array--------------------*/
//$a = Array();
//$a[0] = 10;
//$a[1] = 20;
//$a[2] = 30;
//$a[3] = 40;
//echo $a[1];

//$a = Array();
//$a['name'] = 'Rohim';
//$a['city'] = 'Dhaka';
//echo $a['city'];

//$a =Array();
//$a[0] = 10;
//$a[1] = 20;
//$a[2] = 30;
//$a[3] = 40;
//echo $a[1].' '.$a[3].' '.$a[2];

//$a = Array(10, 20, 30, 'rohim', 'korim');
//echo $a[4];

//$a = Array('100' => 10, '200' =>20, '45' =>30, 'name' =>'Ashik', 'Upozila' =>'Gopalgonj');
//echo $a['name'].' <br/>'.$a['Upozila'].' '.$a['45'];

//$a = [
//    'name' => 'Ashik',
//    'city' => 'Dhaka',
//    'number' => '01799381048',
//    'email' => 'ashikahamed7c@gmail.com'
//];
//echo '<pre>';
//print_r($a);
//echo $a['name'].' '.$a['city'];

//$a =[
//    'name' => 'Ashik',
//    'city' => 'Rohim',
//    'country' => 'Bangladesh'
//];
//foreach ($a as $value){
//  echo $value.'<br/>';
//};

/*-------------------------Funtion------------------*/

/*----------------object oreanted programing (oop)-------------*/

