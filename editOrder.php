<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

<?php

if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $cname = $_GET['cname'];
    $pname = $_GET['pname'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];
    $discount = $_GET['discount'];
    // $total = $_POST['total'];
    $Amount = $quantity * $price;
  }else{
    $id = "";
    $cname ="" ;
    $pname ="" ;
    $quality ="" ;
    $price ="" ;
    $discount = "";
    $total = "";
  }
  
  ?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
          <div class="container my-2">
            <h3>Edit Order Information</h3>
             <!-- Start Form  -->
            <form action="./orderOp.php?id=<?php echo $id;?>" method="post" class="bg-white p-4 rounded">
                    <div class="form-group mb-3">
                        <label for="">Order ID</label>
                        <input type="text"  class="form-control" name="id" placeholder="ID is Auto" value="<?php echo $id?>"  required disabled>
                    </div>



                    <div class="form-group mb-3">
                    <label for="cname">Customer Name</label>
                        <select class="form-control" id="cname" name="cname" required>
                             <option value="<?php echo $cname?>"><?php echo $cname?></option>
                        <?php
                                  $sql = "SELECT name FROM customer";
                                  $result = $conn->query($sql);
                        
                                   // check the query 
                                   if(!$result){
                                    die("invalid query:" . mysqli_error($conn));
                                  }
                        
                                  // Output data of each row
                        while ($row = $result->fetch_assoc()) {

                            ?>
                            

                            <option value="<?php echo $row["name"] ?>"><?php echo $row["name"];?></option>
                            <?php } ?>
                        </select>
                    </div>



                    <div class="form-group mb-3">
                    <label for="productName">Product Name</label>
                        <select class="form-control" id="pname" name="pname" required>
                        <option value="<?php echo $pname?>"><?php echo $pname?></option>
                        <?php
                                  $sql = "SELECT name FROM products";
                                  $result = $conn->query($sql);
                        
                                   // check the query 
                                   if(!$result){
                                    die("invalid query:" . mysqli_error($conn));
                                  }
                        
                                  // Output data of each row
                        while ($row = $result->fetch_assoc()) {

                            ?>
                            
                            <option value="<?php echo $row["name"] ?>"><?php echo $row["name"];?></option>
                            <?php } ?>
                        </select>
                    </div>


                    

                    <div class="form-group mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo $quantity?>" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Prise</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter price" value="<?php echo $price?>" required>
                    </div>


                    <div class="form-group mb-3">
                        <label for="">Discount</label>
                        <input type="number" step="0.01" class="form-control" name="discount" placeholder="Enter quantity" value="<?php echo $discount?>" required>
                    </div>


                  <div class="form-group  d-flex justify-content-end gap-2">
                    <button type="submit" name="edoitOrder" class="btn btn-info ">Update info</button>
                    <a href="./orders.php" class="btn btn-danger">Cencel</a>
                  </div>
            </form>

                <!-- End Form  -->
            </div>
        </div>
      </div>
    </div>

    <!-- End Content  -->

<?php include("./src/footer.php")?>