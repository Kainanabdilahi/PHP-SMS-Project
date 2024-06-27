<?php
include("./src/connection.php");


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
        header("location:./employee.php");
    } else {
        $conn->error;
    }


}



// Update Employee Information

if( isset($_GET['id']) && isset($_POST['editEmployee'])){
    $id = $_GET['id']; //i used the GET Method to get the ID
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

    $query = "UPDATE employee set id= '$id', name= '$name', phone= '$phone', address= '$address', experience='$experience', position='$position', response_name='$response_name', response_phone='$response_phone', gendar='$gendar', shift_work='$shift', salary='$salary' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // $result = $conn->query($query);

    if ($result) {
        echo "Successfully Updated";
        header("location:./employee.php");
    } else {
        $conn->error;
    }
}

// // Delete Emplooyee

// if ((isset($_GET["id"]))) {
//     $id = $_GET['id'];

//     $query = "DELETE FROM employee WHERE id='$id'";
//     $result = mysqli_query($conn, $query);
//     // $result = $conn->query($query);

//     if ($result) {
//         echo"Successfully Deleted";
//         header("location:./employee.php");
//     } else {
//         $conn->error;
//     }
// }



?>