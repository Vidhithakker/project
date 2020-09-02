<?php

    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $upass = $_POST['upass'];
    $upassc = $_POST['upassc'];
    $udob = $_POST['udob'];
    $umob = $_POST['umob'];
    $uadd = $_POST['uadd'];

    $conn = mysqli_connect('localhost','root','','task');

    $query = "insert into user_registration(user_name,email,password,dob,mobile,address) values('$uname','$uemail','$upass','$udob','$umob','$uadd')";

    $res = mysqli_query($conn,$query);

    if ($res)
    {
        echo "Registration Successful";
    }
?>