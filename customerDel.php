<?php

include ("./src/connection.php");

// Delete Customer

if ((isset($_GET["id"]) )) {
    $id = $_GET['id'];

    $query = "DELETE FROM customer WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location:./customer.php");
    } else {
        $conn->error;
    }
}



?>