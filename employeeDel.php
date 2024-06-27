<?php

include ("./src/connection.php");

// Delete Emplooyee

if ((isset($_GET["id"]))) {
    $id = $_GET['id'];

    $query = "DELETE FROM employee WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location:./employee.php");
    } else {
        $conn->error;
    }
}



?>