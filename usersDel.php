<?php
include ("./src/connection.php");
// // Delete user

if ((isset($_GET["id"]))) {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location:./users.php");
    } else {
        $conn->error;
    }
}


?>