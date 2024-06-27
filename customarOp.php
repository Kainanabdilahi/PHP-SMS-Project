<?php
include ("./src/connection.php");

// Insert Customer

if (isset($_POST['addCustomar'])) {
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gendar = $_POST['gendar'];

    $query = "INSERT INTO customer(id, name, phone, address, gender) VALUES('','$name','$phone','$address','$gendar')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Successfully Registred";
        header("location:./customer.php");
    } else {
        $conn->error;
    }

} 

// Update Customer Infromation

if( isset($_GET['id']) && isset($_POST['editCustomer'])){
    $id = $_GET['id']; //i used the GET Method to get the ID
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gendar'];

    $query = "UPDATE customer set name= '$name', phone= '$phone', address='$address', gender= '$gender' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Updated";
        header("location:./customer.php");
    } else {
        $conn->error;
    }
}

// // Delete Customer

// if ((isset($_GET["id"]) )) {
//     $id = $_GET['id'];

//     $query = "DELETE FROM customer WHERE id='$id'";
//     $result = mysqli_query($conn, $query);
//     // $result = $conn->query($query);

//     if ($result) {
//         echo"Successfully Deleted";
//         header("location:./customer.php");
//     } else {
//         $conn->error;
//     }
// }


?>