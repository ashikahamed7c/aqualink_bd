<?php

namespace App\Classes;

use function GuzzleHttp\headers_from_lines;

class Login
{
    public function adminLoginCheck()
    {
        $password = md5($_POST['password']);
        $link = mysqli_connect('localhost', 'root', '', 'sms');
        $sql = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = '$password'";

        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            $user = mysqli_fetch_assoc($queryResult);

            if ($user){

                session_start();
                $_SESSION['id']   = $user['id'];
                $_SESSION['name'] = $user['name'];

                header('Location: home.php');
            }else{
                $message = 'Email Address Or Password Invalid';
                return $message;

            }

        }else{
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function adminLogout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('Location: index.php');

    }


}