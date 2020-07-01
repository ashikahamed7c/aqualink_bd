<?php

class Example
{
    public $city = 'Dhaka';
    protected $email ='ashik@gmail.com';
    private $location = 'fjkdjfkdjfdk';

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