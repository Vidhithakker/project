<?php

    $name = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost','root','','task');

    $query = "select * from user_registration where email='$name' and password='$password'";

    $res = mysqli_query($conn,$query);

    $count = mysqli_num_rows($res);

    if ($count == 1)
    {
        header('location:Add Item.php');
    }
    else
    {
        echo "Login Error";
    }
?>