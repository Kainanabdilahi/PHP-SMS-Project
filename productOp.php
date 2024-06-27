<?php
include ("./src/connection.php");


// Insert Product
if (isset($_POST['addProduct'])) {
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $pries = $_POST['prise'];
    $quality = $_POST['quality'];
    $date = $_POST['date'];

    $query = "INSERT INTO products(id, name, pries, quality, date) VALUES('','$name','$pries','$quality','$date')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Successfully Registred";
        header("location:./products.php");
    } else {
        $conn->error;
    }

} 


// Update Product Infromation

if( isset($_GET['id']) && isset($_POST['editProduct'])){
    $id = $_GET['id']; //i used the GET Method to get the ID
    $name = $_POST['name'];
    $pries = $_POST['prise'];
    $quality = $_POST['quality'];
    $date = $_POST['date'];

    $query = "UPDATE products set name= '$name', pries= '$pries', quality='$quality', date= '$date' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Updated";
        header("location:./products.php");
    } else {
        $conn->error;
    }
}

// // Delete Product

// if ((isset($_GET["id"]))) {
//     $id = $_GET['id'];

//     $query = "DELETE FROM products WHERE id='$id'";
//     $result = mysqli_query($conn, $query);
//     // $result = $conn->query($query);

//     if ($result) {
//         echo"Successfully Deleted";
//         header("location:./products.php");
//     } else {
//         $conn->error;
//     }
// }



?>