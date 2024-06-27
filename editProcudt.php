<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $prise = $_GET['pries'];
    $quality = $_GET["quality"];
    $date = $_GET["date"];
  }else{
    $id = "";
    $name ="" ;
    $prise ="" ;
    $quality ="" ;
    $date = "";
  }
  
  ?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
          <div class="container my-2">
            <h3>Edit Product Information</h3>
             <!-- Start Form  -->
            <form action="./productOp.php?id=<?php echo $id;?>" method="post" class="bg-white p-4 rounded">
                    <div class="form-group mb-3">
                        <label for="">ID</label>
                        <input type="text"  class="form-control" name="id" placeholder="ID is Auto" value="<?php echo $id?>"  required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $name?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Prise</label>
                        <input type="number" step="0.01" class="form-control" name="prise" placeholder="Enter prise" value="<?php echo $prise?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Quality</label>
                        <input type="text" class="form-control" name="quality" placeholder="Enter quality" value="<?php echo $quality?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Date</label>
                        <input type="date" class="form-control" name="date" placeholder="Enter Date" value="<?php echo $date?>" required>
                    </div>

                  <div class="form-group  d-flex justify-content-end gap-2">
                    <button type="submit" name="editProduct" class="btn btn-info ">Update info</button>
                    <a href="./products.php" class="btn btn-danger">Cencel</a>
                  </div>
            </form>

                <!-- End Form  -->
            </div>
        </div>
      </div>
    </div>

    <!-- End Content  -->

<?php include("./src/footer.php")?>