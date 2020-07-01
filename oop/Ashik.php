<?php
require_once './Asif.php';

class Ashik Extends Asif
{
    public    $name = 'Ashik';
    protected $age  = '30';
    private   $address = 'Dhaka';

    public function talk()
    {
//        echo 'In talk';
//         echo $this->city;
    }
    protected function walk()
    {
        echo 'In Walk';
    }
    private function run()
    {
        echo 'In run';
    }


}