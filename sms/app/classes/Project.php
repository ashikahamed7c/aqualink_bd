<?php

namespace App\Classes;

class Project
{
    public function saveProject()
    {
        $link = mysqli_connect('localhost', 'root','', 'sms');
        $sql = "INSERT INTO project (name, email, mobile) VALUE ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";

        if (mysqli_query($link, $sql)) {
            $success = 'Student Info Success';
            return $success;
        }else{
            die('Query Problem'.mysqli_error($link));

        }

    }

    public function viewProject()
    {
        $link = mysqli_connect('localhost', 'root','', 'sms');
        $sql = "SELECT * FROM project";
        $queryResult = mysqli_query($link, $sql);
        return $queryResult;
    }

    public function editProject($id)
    {
        $link = mysqli_connect('localhost', 'root','', 'sms');
        $sql = "SELECT * FROM project WHERE id = '$id'";
        $queryResult = mysqli_query($link, $sql);
        return $queryResult;


    }

    public function updateProject()
    {
        $link = mysqli_connect('localhost', 'root','', 'sms');
        $sql = "UPDATE project SET name = '$_POST[name]', email = '$_POST[email]', mobile = '$_POST[mobile]' WHERE id = '$_POST[id]'";
        mysqli_query($link, $sql);
        header('Location: view-student.php');

    }
    public function deleteProject($id)
    {
        $link = mysqli_connect('localhost', 'root','', 'sms');
        $sql = "DELETE FROM project WHERE id = '$id'";
        mysqli_query($link, $sql);
        header('Location: view-student.php');

    }

}