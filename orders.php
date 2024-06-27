<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
        <div class="d-flex flex-row justify-content-between">
          <h3>Order List</h3>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
          Add Order
        </button>
        </div>

        <!-- Get data from the database -->

        <table class='table my-3 table-bordered bg-white'>
                 <tr class='table-dark '>
                  <th>Order ID</th>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, cname, pname, quantity, price, discount, total FROM orders ORDER BY id DESC";
          $result = $conn->query($sql);

           // check the query 
           if(!$result){
            die("invalid query:" . mysqli_error($conn));
          }

          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            ?>   
                         <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["cname"]?></td>
                            <td><?php echo $row["pname"]?></td>
                            <td><?php echo $row["quantity"]?></td>
                            <td>$<?php echo $row["price"]?></td>
                            <td>$<?php echo $row["discount"]?></td>
                            <td>$<?php echo $row["total"]?></td>
                            <td>
                              <a href="./editOrder.php?id=<?php echo $row["id"] ?>&cname=<?php echo $row["cname"]?>&pname=<?php echo $row["pname"] ?>&quantity=<?php echo $row["quantity"]?>&price=<?php echo $row["price"]?>&discount=<?php echo $row["discount"]?>&total=<?php echo $row["total"]?> " class="btn btn-info">Edit</a>
                              <a href="./orderDel.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
                            </td>
                         </tr>
                    <?php }?>
                   </table>
            <!-- Start bootstrap Modal  -->
        <!-- Modal for inserting-->
        <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Start Form  -->
                <form action="./orderOp.php" method="post">
                    <div class="form-group mb-3">
                        <label for="id">Order ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="ID is Auto" required disabled>
                    </div>

                    <div class="form-group mb-3">
                    <label for="cname">Customer Name</label>
                        <select class="form-control" id="cname" name="cname" required>
                             <option value="">Customer Name</option>
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
                            <option value="">Product Name</option>
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
                        <label for="phone">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="price">Discount</label>
                        <input type="number" step="0.01" class="form-control" id="discount" name="discount" placeholder="Enter discount" required>
                    </div>

                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="addOrder" class="btn btn-success">Add Order</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </form>

                <!-- End Form  -->
            </div>
          </div>
        </div>

        <!-- End bootstrap Modal  -->
        <!-- Start total  -->
        <?php
            $sql = "SELECT SUM(total) AS total_amount FROM orders";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    // echo "Total Amount: " . $row["total_amount"];
        ?>
        <!-- End total  -->

        <div class="bg-white p-3">
        <table class='table my-3 bg-white fw-bold'>
                 <tr class='table-dark '>
                  <td>Total Cash</td>
                  <td class="text-end">$<?php if ($row['total_amount'] == 0) {
                    echo "0";} echo $row['total_amount'];?></td>
                 </tr>

                <?php

                 } // end of while
                } else {
                        // $msgZero = "0";
                } // end of loop
              
                ?>

        </div>
        

      </div>
    </div>

    <!-- End Content  -->


    <?php include("./src/footer.php")?>