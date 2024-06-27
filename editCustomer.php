<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $address = $_GET["address"];
    $gender = $_GET["gender"];
  }else{
    $id = "";
    $name ="" ;
    $phone ="" ;
    $address ="" ;
    $gender = "";
  }
  
  ?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
          <div class="container my-2">
            <h3>Edit Customer Information</h3>
             <!-- Start Form  -->
            <form action="./customarOp.php?id=<?php echo $id;?>" method="post" class="bg-white p-4 rounded">
                    <div class="form-group mb-3">
                        <label for="id">ID</label>
                        <input type="text"  class="form-control" name="id" placeholder="ID is Auto" value="<?php echo $id?>"  required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $name?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter Phone" value="<?php echo $phone?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $address?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gendar"  required>
                            <option value="<?php echo $gender?>"><?php echo $gender?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                  <div class="form-group  d-flex justify-content-end gap-2">
                    <button type="submit" name="editCustomer" class="btn btn-info ">Update info</button>
                    <a href="./customer.php" class="btn btn-danger">Cencel</a>
                  </div>
            </form>

                <!-- End Form  -->
            </div>
        </div>
      </div>
    </div>

    <!-- End Content  -->

<?php include("./src/footer.php")?>