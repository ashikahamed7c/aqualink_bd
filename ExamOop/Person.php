<?php
require_once './Example.php';


class Person extends Example
{
    public $name = 'ashik';
    protected $phone = '0154789569';
    private $address = 'Agargaon, Dhaka';

    public function talk()
    {
//        echo 'In talk';
            echo $this->email;
    }

    protected function walk()
    {
        echo 'In walk';
    }

    private function run()
    {
        echo 'In run';
    }

}