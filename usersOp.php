<?php
include ("./src/connection.php");

// Insert Product
if (isset($_POST['addUser'])) {
    // $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $email = $_POST['email'];

    $query = "INSERT INTO users(id, username, password, type, email ) VALUES('', '$username', '$password', '$type', '$email')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Successfully Registred";
        header("location:./users.php");
    } else {
        $conn->error;
    }

} 

// Update Product Infromation

if( isset($_GET['id']) && isset($_POST['editUser'])){
    $id = $_GET['id']; //i used the GET Method to get the ID
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $type = $_POST['type'];

    $query = "UPDATE users set username = '$username', password = '$password', type = '$type', email ='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Updated";
        header("location:./users.php");
    } else {
        $conn->error;
    }
}




?>