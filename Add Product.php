<?php
    $product = $_POST['product'];

    $conn = mysqli_connect('localhost','root','','task');

    $query = "insert into items(item_name) values('$product')";

    $res = mysqli_query($conn,$query);

    if ($res)
    {
        header('location:Add Item.php');
    }
    else
    {
        echo "Insertion Error";
    }
?>