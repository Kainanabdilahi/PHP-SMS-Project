<?php

include ("./src/connection.php");

session_start();

$msg = "";


if (isset($_POST["submit"])){

    $userName = $_POST["username"];
    $password = $_POST["password"];


    // SQL query to fetch data

   $sql = "SELECT * FROM users";
   
   $result = $conn->query($sql);

    $num = mysqli_num_rows($result);



    // check the query 
//     if(!$result){
//      die("invalid query:" . mysqli_error($conn));
//    }

   // Output data of each row
   while ($row = $result->fetch_assoc()) {

    if($userName == $row["username"] && $password == $row["password"] && $row['type'] == 'admin'){

        // $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['username'];
        


        header("Location:./Dashboard.php");

    }else if($userName == $row["username"] && $password == $row["password"] && $row['type'] == 'user'){

        $_SESSION['username'] = $row['username'];
        


        header("Location:./userPage.php");

    }else{

         $msg = " <div class='alert alert-warning' role='alert'> incorrect username and password!!</div> ";

    }

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
      <h2 class="text-center mb-4">Maamuus <span class="text-danger">Electronics</span></h2>
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
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-danger p-2" href="./Dashboard.php" name="submit">Login</button>
            </div>
            <div class="d-grid mb-3 d-flex justify-content-between">
                <small>Don't have an account!?</small>
                <a href="./singup.php" class="">Singup</a>
            </div>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
