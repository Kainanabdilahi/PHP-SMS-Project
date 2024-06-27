<?php

include ("./src/connection.php");
// Delete Product

if ((isset($_GET["id"]))) {
    $id = $_GET['id'];

    $query = "DELETE FROM orders WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location:./orders.php");
    } else {
        $conn->error;
    }
}




?>