<?php
namespace App\Classes;

class Student
{
    public function saveStudentInfo(){
       $link =  mysqli_connect('localhost', 'root', '', 'student');
       $sql = "INSERT INTO students (name, email, mobile) VALUE ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";

       if (mysqli_query($link, $sql)){
            $massage = 'Student Info save successfully';
            return $massage;
       } else{
            die('Query Problem'.mysqli_error($link));

       }

    }

    public function getStudentInfo(){
        $link =  mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students";
        $queryResult = mysqli_query($link, $sql);
        return $queryResult;
    }

    public function getStudentInfoId($id)
    {
        $link =  mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students WHERE id = '$id'";
        $queryResult = mysqli_query($link, $sql);
        return $queryResult;

    }




//    public function getStudentInfoById($id){
//        $link =  mysqli_connect('localhost', 'root', '', 'student');
//        $sql = "SELECT * FROM students WHERE id = '$id'";
//
//        if (mysqli_query($link, $sql)){
//            $queryResult = mysqli_query($link, $sql);
//            return $queryResult;
//        } else{
//            echo ('Query Problem'.mysqli_error($link));
//
//        }
//    }


}