<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
        <div class="d-flex flex-row justify-content-between">
          <h3>Customer List </h3>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
          Add Customer
        </button>
        </div>

        <!-- Get data from the database -->

        <table class='table my-3 table-bordered bg-white'>
                 <tr class='table-dark '>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Gendar</th>
                  <th>Action</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, name, phone, address, gender FROM customer";
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
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["phone"]?></td>
                            <td><?php echo $row["address"]?></td>
                            <td><?php echo $row["gender"]?></td>
                            <td>
                              <a href="./editCustomer.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"]?>&phone=<?php echo $row["phone"] ?>&address=<?php echo $row["address"]?>&gender=<?php echo $row["gender"]?> " class="btn btn-info">Edit</a>
                              <a href="./customerDel.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Start Form  -->
                <form action="./customarOp.php" method="post">
                    <div class="form-group mb-3">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Enter is Auto" required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gendar" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="addCustomar" class="btn btn-success">Add Customer</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </form>

                <!-- End Form  -->
            </div>
          </div>
        </div>
        <!-- End bootstrap Modal  -->

      </div>
    </div>

    <!-- End Content  -->


    <?php include("./src/footer.php")?>