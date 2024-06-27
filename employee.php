<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
        <div class="d-flex flex-row justify-content-between">
          <h3>Employee List </h3>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
          Add Employee
        </button>
        </div>

        <!-- Get data from the database -->

        <table class='table my-3 table-bordered bg-white'>
                 <tr class='table-dark '>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Experience</th>
                  <th>Position</th>
                  <th>Response Name</th>
                  <th>Response Phone</th>
                  <th>Gendar</th>
                  <th>Shift</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, name, phone, address, experience, position, response_name, response_phone, gendar, shift_work, salary FROM employee";
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
                            <td><?php echo $row["experience"]?></td>
                            <td><?php echo $row["position"]?></td>
                            <td><?php echo $row["response_name"]?></td>
                            <td><?php echo $row["response_phone"]?></td>
                            <td><?php echo $row["gendar"]?></td>
                            <td><?php echo $row["shift_work"]?></td>
                            <td>$<?php echo $row["salary"]?></td>
                            <td>
                              <a href="./editEmployee.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"]?>&phone=<?php echo $row["phone"] ?>&address=<?php echo $row["address"]?>&experience=<?php echo $row["experience"]?>&position=<?php echo $row["position"]?>&response_name=<?php echo $row["response_name"]?>&response_phone=<?php echo $row["response_phone"]?>&gendar=<?php echo $row["gendar"]?>&shift_work=<?php echo $row["shift_work"]?>&salary=<?php echo $row["salary"]?> " class="btn btn-info">Edit</a>
                              <a href="./employeeDel.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Start Form  -->
                <form action="./employeeOp.php" method="post">
                    <div class="form-group mb-3">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="ID is Auto" required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"  required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Experience</label>
                        <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter Experience" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Position</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Position" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Response Name</label>
                        <input type="text" class="form-control" id="response_name" name="response_name" placeholder="Enter Response Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Response Phone</label>
                        <input type="text" class="form-control" id="response_phone" name="response_phone" placeholder="Enter Response Phone" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gendar</label>
                        <select class="form-control" id="gender" name="gendar" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Shift Work</label>
                        <input type="text" class="form-control" id="shift_work" name="shift_work" placeholder="Enter Shift"  required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary"  required>
                    </div>

                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="addEmployee" class="btn btn-success">Add Customer</button>
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