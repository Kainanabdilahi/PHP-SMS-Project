<?php
include ("./src/connection.php");


// Insert Product
if (isset($_POST['addpayment'])) {
    // $id = $_POST['id'];
    $oid = $_POST['oid'];
    $ptype = $_POST['ptype'];
    $total = $_POST['total'];
    $status = $_POST['status'];

    $query = "INSERT INTO finance(id, oid, ptype, total, status ) VALUES('', '$oid', '$ptype', '$total', '$status')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Successfully Registred";
        header("location:./finance.php");
    } else {
        $conn->error;
    }

} 



// Delete Payment

if ((isset($_GET["id"]))) {
    $id = $_GET['id'];

    $query = "DELETE FROM finance WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location:./finance.php");
    } else {
        $conn->error;
    }
}



?>