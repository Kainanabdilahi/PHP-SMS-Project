<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <h3>User Details </h3>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
          Add User
        </button>
        </div>

        <!-- Get data from the database -->

        <table class='table my-3 table-bordered bg-white'>
                 <tr class='table-dark '>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>email</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, username, password, type, email FROM users";
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
                            <td><?php echo $row["username"]?></td>
                            <td><?php echo $row["password"]?></td>
                            <td><?php echo $row["email"]?></td>
                            <td><?php echo $row["type"]?></td>
                            <td>
                              <a href="./editUsers.php?id=<?php echo $row["id"] ?>&username=<?php echo $row["username"]?>&password=<?php echo $row["password"] ?> &type=<?php echo $row["type"] ?>& email=<?php echo $row["email"] ?> " class="btn btn-info">Edit</a>
                              <a href="./usersDel.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Start Form  -->
                <form action="./usersOp.php" method="post">

                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Paswword</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="">Select type</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="addUser" class="btn btn-success">Add User</button>
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