<?php

class Asif
{
    public $city = 'Dhaka';
    protected  $email = 'asif@gmail.com';
    private  $phone = '0147896542';

    public function one()
    {
        echo 'In One';
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