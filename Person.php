<?php

class Person
{
    public $name = 'Ashik';
    protected $city = 'Dhaka';
    private $mobile = '017999258745';

   public function one()
    {
        echo 'In one';
    }
    protected function two()
    {
        echo 'In two';
    }
    private function three()
    {
        echo 'In three';
    }

}