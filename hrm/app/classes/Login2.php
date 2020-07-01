<?php
namespace App\Classes;

class Login2
{
    public function adminLoginCheck2()
    {
        $password = md5($_POST['password']);
        $link     = mysqli_connect('localhost', 'root', '', 'hrm');
        $sql      ="SELECT * FROM users WHERE email ='$_POST[email]' AND password = '$password'";

        if (mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            $users       = mysqli_fetch_assoc($queryResult);
            if ($users){
                session_start();
                $_SESSION['id']   = $users['id'];
                $_SESSION['name'] = $users['name'];
                header('Location: home.php');

            }else{
                $message = 'Email or Password Invalid';
                return $message;
            }

        }else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function adminLogOut2()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('Location: index.php');
    }

}