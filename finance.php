<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
        <div class="d-flex flex-row justify-content-between">
          <h3>Finance Section</h3>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
          Regist Payment
        </button>
        </div>

        <!-- Get data from the database -->

        <table class='table my-3 table-bordered bg-white'>
                 <tr class='table-dark '>
                  <th>Payment ID</th>
                  <th>Order ID</th>
                  <th>Total</th>
                  <th>Payment Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, oid,  total, ptype, status FROM finance ORDER BY id DESC";
          $result = $conn->query($sql);

           // check the query 
           if(!$result){
            die("invalid query:" . mysqli_error($conn));
          }

              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                  ?>   
                         <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["oid"] ?></td>
                            <td>$<?php echo $row["total"] ?></td>
                            <td>$<?php echo $row["ptype"] ?></td>
                            <?php if ($row["status"]=='Receved'){echo '<td class="bg-success text-white">' . $row["status"] . '</td>'; }else{echo '<td class="bg-danger text-white">' . $row["status"] . '</td>';} ?>
                            <td>
                              <a href="./fOp.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Regist New Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Start Form  -->
                <form action="./fOp.php" method="post">
                    <div class="form-group mb-3">
                        <label for="id">Payment ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="ID is Auto" required disabled>
                    </div>

                    <div class="form-group mb-3">
                    <label for="cname">Order ID</label>
                        <select class="form-control" id="oid" name="oid" required>
                             <option value="">Select ID</option>
                        <?php
                                  $sql = "SELECT id FROM orders";
                                  $result = $conn->query($sql);
                        
                                   // check the query 
                                   if(!$result){
                                    die("invalid query:" . mysqli_error($conn));
                                  }
                        
                                  // Output data of each row
                        while ($row = $result->fetch_assoc()) {

                            ?>
                            

                            <option value="<?php echo $row["id"] ?>"><?php echo $row["id"];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="id">Total Amount</label>
                        <input type="text" class="form-control" id="total" name="total" placeholder="Enter Total Payment" required>
                    </div>



                    <div class="form-group mb-3">
                        <label for="status">Payment Type</label>
                        <select class="form-control" id="ptype" name="ptype" required>
                            <option value="">Select Payment Type</option>
                            <option value="EVC">EVC</option>
                            <option value="E-Dahab">E-Dahab</option>
                            <option value="Bank">Bank</option>
                            <option value="Dollar">Dollar</option>
                            <option value="SH.SO">SH.SO</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="">Select status</option>
                            <option value="Receved">Receved</option>
                            <option value="Not-Receved">Not-Receved</option>
                        </select>
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="addpayment" class="btn btn-success">Regist payment</button>
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
            $sql = "SELECT SUM(total) AS total_amount FROM finance";
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