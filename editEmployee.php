<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $address = $_GET["address"];
    $experience = $_GET["experience"];
    $position = $_GET["position"];
    $response_name = $_GET["response_name"];
    $response_phone = $_GET["response_phone"];
    $gendar = $_GET["gendar"];
    $shift = $_GET["shift_work"];
    $salary = $_GET["salary"];
  }else{
    $id = "";
    $name = "" ;
    $phone ="";
    $address ="" ;
    $experience ="";
    $position = "";
    $response_name = "";
    $response_phone ="";
    $gendar = "";
    $shift_work ="" ;
    $salary = "";
  }
  
  ?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
          <div class="container my-2">
            <h3>Edit Employee Information</h3>
             <!-- Start Form  -->
            <form action="employeeOp.php?id=<?php echo $id;?>?shift=<?php echo $shift?>" method="post" class="bg-white p-4 rounded">
                    <div class="form-group mb-3">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" placeholder="Enter is Auto" value="<?php echo $id?>" required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"  value="<?php echo $name?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone"value="<?php echo $phone?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address"  value="<?php echo $address?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Experience</label>
                        <input type="text" class="form-control" name="experience"  value="<?php echo $experience?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Position</label>
                        <input type="text" class="form-control" name="position" value="<?php echo $position?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Response_name</label>
                        <input type="text" class="form-control" name="response_name" value="<?php echo $response_name?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">response_phone</label>
                        <input type="text" class="form-control" name="response_phone" value="<?php echo $response_phone?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="gendar">Gendar</label>
                        <select class="form-control" id="gendar" name="gendar"  required>
                            <option value="<?php echo "$gendar"; ?>"><?php echo $gendar; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    
     
                    <div class="form-group mb-3">
                        <label for="address">Shift Work</label>
                        <input type="text" class="form-control" name="shift_work" value="<?php echo $shift?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Salary</label>
                        <input type="text" class="form-control" name="salary" value="<?php echo $salary?>" required>
                    </div>
                  <div class="form-group  d-flex justify-content-end gap-2">
                    <button type="submit" name="editEmployee" class="btn btn-info ">Update info</button>
                    <a href="./employee.php" class="btn btn-danger">Cencel</a>
                  </div>
                  </div>
            </form>

                <!-- End Form  -->
            </div>
        </div>
      </div>
    </div>

    <!-- End Content  -->
<?php
// Assuming a valid connection to the database is established in $conn



?>





<?php include("./src/footer.php")?>