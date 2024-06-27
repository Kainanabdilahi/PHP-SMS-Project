<?php

include ("./connection.php");

// Start customer operations  

// Insert Customer
if (isset($_POST['add'])) {
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gendar = $_POST['gendar'];

    $query = "INSERT INTO customer(id, name, phone, address, gender) VALUES('','$name','$phone','$address','$gendar')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Successfully Registred";
        header("location:../customer.php");
    } else {
        $conn->error;
    }

} 


// Update Customer Infromation

if( isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gendar'];

    $query = "UPDATE customer set name= '$name', phone= '$phone', address='$address', gender= '$gender' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Updated";
        header("location:../customer.php");
    } else {
        $conn->error;
    }
}

// Delete Customer

if ((isset($_GET["id"]) )) {
    $id = $_GET['id'];

    $query = "DELETE FROM customer WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo"Successfully Deleted";
        header("location:../customer.php");
    } else {
        $conn->error;
    }
}
// End customer operations  



//  Start Employee Operations 

// Insert Eemployee
if (isset($_POST['addEmployee'])) {
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $position = $_POST['position'];
    $response_name = $_POST['response_name'];
    $response_phone = $_POST['response_phone'];
    $gendar = $_POST['gendar'];
    $shift = $_POST['shift_work'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO employee(id, name, phone, address, experience, position, response_name, response_phone, gendar, shift_work, salary ) VALUES('','$name','$phone','$address','$experience','$position','$response_name','$response_phone','$gendar','$shift','$salary')";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo "Successfully Registred";
        header("location:../employee.php");
    } else {
        $conn->error;
    }


}

// Edit Eemployee
if (isset($_POST['editEmployee'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $position = $_POST['position'];
    $response_name = $_POST['response_name'];
    $response_phone = $_POST['response_phone'];
    $gendar = $_POST['gendar'];
    $shift = $_POST['shift_work'];
    $salary = $_POST['salary'];

    $query = "UPDATE employee set id= '$id', name= '$name', phone= '$phone', address= '$address', experience='$experience', response_name='$response_name', response_phone='$response_phone', gendar='$gendar', shift='$shift', salary='$salary' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo "Successfully Updated";
        header("location:../employee.php");
    } else {
        $conn->error;
    }

}


// Delete Emplooyee

// if ((isset($_GET["id"]))) {
//     $id = $_GET['id'];

//     $query = "DELETE FROM employee WHERE id='$id'";
//     $result = mysqli_query($conn, $query);
//     // $result = $conn->query($query);

//     if ($result) {
//         echo"Successfully Deleted";
//         header("location:../employee.php");
//     } else {
//         $conn->error;
//     }
// }

// End Employee Operations 


// Insert Product 

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
        header("location:../products.php");
    } else {
        $conn->error;
    }

} 

?>