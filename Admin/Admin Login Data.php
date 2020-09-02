<?php

    $name = $_POST['username'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect('localhost','root','','task');

    $query = "select * from admin where name='$name' and password='$pass'";

    $res = mysqli_query($conn,$query);

    $count = mysqli_num_rows($res);

    if ($count == 1)
    {
        header('location:Admin Panel.php');
    }
    else
    {
        echo "Login Error";
    }
?>