<?php
session_start();

if (!isset($_POST['submit'])) {
    header("Location: ../index.php");
    exit();
}

else{
    include_once 'dbh.inc.php';
    $uid = $_SESSION['u_id'];
    $product_one = $_POST['product_one'];
    $product_two = $_POST['product_two'];
    $product_three = $_POST['product_three'];
    $product_four = $_POST['product_four'];
    $product_five = $_POST['product_five'];
    $product_six = $_POST['product_six'];
    
    if ($product_one == 0 && $product_two == 0 && $product_three == 0 && $product_four == 0 && $product_five ==0 && $product_six ==0)
    {
        header("Location: ../index.php?order=zero");
        exit();
		}
    else {
        $sql = " INSERT INTO orders (id, product_one, product_two, product_three, product_four, product_five,product_six) VALUES ('$uid', '$product_one', '$product_two', '$product_three', '$product_four', '$product_five','$product_six'); ";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount -'$product_one' WHERE item_id = 1";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount -'$product_two' WHERE item_id = 2";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount -'$product_three' WHERE item_id = 3";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount -'$product_four' WHERE item_id = 4";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount -'$product_five' WHERE item_id = 5";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount -'$product_six' WHERE item_id = 6";
        mysqli_query($conn, $sql);
        header("Location: ../index.php?order=success");
    }
}