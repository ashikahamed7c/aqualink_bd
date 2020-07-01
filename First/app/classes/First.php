<?php

namespace App\Classes;

class First
{
    public function saveIndex()
    {
        $link = mysqli_connect('localhost', 'root', '', 'first');
        $sql = "INSERT INTO firstOne (name, email, mobile)  VALUE ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";
        if (mysqli_query($link, $sql))
        {
            $index = 'Successfully Student Info Save';
            return $index;
        }else{
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function getview()
    {
        $link = mysqli_connect('localhost', 'root', '', 'first');
        $sql = "SELECT * FROM firstOne";
        $view = mysqli_query($link, $sql);
        return $view;


    }
    public function getEdit($id)
    {
        $link = mysqli_connect('localhost', 'root', '', 'first');
        $sql = "SELECT * FROM firstOne WHERE id = '$id'";
        $edit = mysqli_query($link, $sql);
        return $edit;

    }
    public function updateFirst()
    {
        $link = mysqli_connect('localhost', 'root', '', 'first');
        $sql = "UPDATE firstOne SET name = '$_POST[name]', email=  '$_POST[email]', mobile ='$_POST[mobile]' WHERE id = '$_POST[id]'";
        mysqli_query($link, $sql);
        header('Location:view.php');

    }
    public function deleteFirst($id)
    {
        $link = mysqli_connect('localhost', 'root', '', 'first');
        $sql = "DELETE FROM firstOne WHERE id = '$id'";
        mysqli_query($link, $sql);
        header('Location:view.php');

    }

}