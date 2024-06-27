<?php
include ("./src/connection.php");


// Insert Product
if (isset($_POST['addOrder'])) {
    // $id = $_POST['id'];
    $cname = $_POST['cname'];
    $pname = $_POST['pname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    // $total = $_POST['total'];
    $Amount = $quantity * $price - $discount;

    $query = "INSERT INTO orders(id, cname, pname, quantity, price, discount, total) VALUES('','$cname','$pname', '$quantity', '$price ', '$discount', '$Amount')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Successfully Registred";
        header("location:./orders.php");
    } else {
        $conn->error;
    }

} 


// Update Product Infromation

if( isset($_GET['id']) && isset($_POST['edoitOrder'])){
    $id = $_GET['id']; //i used the GET Method to get the ID
    $cname = $_POST['cname'];
    $pname = $_POST['pname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    // $total = $_POST['total'];
    $Amount = $quantity * $price - $discount;

    $query = "UPDATE orders set cname= '$cname', pname= '$pname', quantity='$quantity', price= '$price', discount='$discount', total='$Amount' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Updated";
        header("location:./orders.php");
    } else {
        $conn->error;
    }
}

// Delete Product

// if ((isset($_GET["id"]))) {
//     $id = $_GET['id'];

//     $query = "DELETE FROM orders WHERE id='$id'";
//     $result = mysqli_query($conn, $query);
//     // $result = $conn->query($query);

//     if ($result) {
//         echo"Successfully Deleted";
//         header("location:./orders.php");
//     } else {
//         $conn->error;
//     }
// }



?>