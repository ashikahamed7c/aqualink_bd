<?php
namespace App\Classes;

class Calculator
{
    public    $firstNumber   = 10;
    protected $secondNumber  = 20;
    private    $thirdNumber  = 30;

    public function __construct()
    {

    }
    public static function well()
    {
        echo 'Hello world';
    }

    public function addition()
    {
        $result = $this->firstNumber + $this->secondNumber;
        echo $result;
    }
    protected function subtraction()
    {
//        $result = $this->firstNumber - $this->secondNumber;
//        echo $result;
    }
    private function multiplication()
    {
//        $result = $this->firstNumber * $this->secondNumber;
    }
}