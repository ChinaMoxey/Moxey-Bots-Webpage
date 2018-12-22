<?php
session_start();

if (!isset($_POST['submit'])) {
    header("Location: ./Inventory.php");
    exit();
}

else{
    include_once 'dbh.inc.php';
    $product_one = $_POST['product_one'];
    $product_two = $_POST['product_two'];
    $product_three = $_POST['product_three'];
    $product_four = $_POST['product_four'];
    $product_five = $_POST['product_five'];
    $product_six = $_POST['product_six'];
    


        $sql = " UPDATE inventory SET item_amount = item_amount +'$product_one' WHERE item_id = 1";
        mysqli_query($conn, $sql);

        $sql = " UPDATE inventory SET item_amount = item_amount +'$product_two' WHERE item_id = 2";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount +'$product_three' WHERE item_id = 3";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount +'$product_four' WHERE item_id = 4";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount +'$product_five' WHERE item_id = 5";
        mysqli_query($conn, $sql);
        $sql = " UPDATE inventory SET item_amount = item_amount +'$product_six' WHERE item_id = 6";
        mysqli_query($conn, $sql);
        header("Location: ./Inventory.php?inventoryupdate=success");
    }
