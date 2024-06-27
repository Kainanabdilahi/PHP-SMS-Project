<?php

include ("./src/connection.php");

$msg = "";

if (isset($_POST['submit'])) {
    // $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    // $type = $_POST['type'];

    $query = "INSERT INTO users(id, username, password, email, type ) VALUES('', '$username', '$password', '$email', '$type')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // echo "Successfully Registred";
        // header("location:./singup.php");
        $msg = "<div class='alert alert-success' role='alert'>Successfuly Registed</div> ";
    } else {
        $conn->error;
    }

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <style>
        body {
            background-color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Gray background */
        }
        .login-container {
            max-width: 450px;
            padding: 55px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="text-center mb-5">Registration form</h1>
        <form action="" method="post">
            <?php echo "$msg";?>
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id="" placeholder="" name="username"  required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="password" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="" placeholder="" name="email" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"></label>
                <input type="hidden" class="form-control" id="" placeholder="" name="type" value="user" required>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-danger p-2" href="./Dashboard.php" name="submit">Singup</button>
            </div>
            <div class="d-grid mb-3 d-flex justify-content-between">
                <small>I have already an Account!?</small>
                <a href="./index.php" class="">Login now</a>
            </div>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
