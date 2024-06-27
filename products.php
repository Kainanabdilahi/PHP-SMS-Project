<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

<?php

?>

    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
        <div class="d-flex flex-row justify-content-between">
          <h3>Product List</h3>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
          Add Product
        </button>
        </div>

        <!-- Get data from the database -->

        <table class='table my-3 table-bordered bg-white'>
                 <tr class='table-dark '>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Prise</th>
                  <th>Quality</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, name, pries, quality, date FROM products";
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
                            <td>$<?php echo $row["pries"]?></td>
                            <td><?php echo $row["quality"]?></td>
                            <td><?php echo $row["date"]?></td>
                            <td>
                              <a href="./editProcudt.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"]?>&pries=<?php echo $row["pries"] ?>&quality=<?php echo $row["quality"]?>&date=<?php echo $row["date"]?> " class="btn btn-info">Edit</a>
                              <a href="./productDel.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Start Form  -->
                <form action="./productOp.php" method="post">
                    <div class="form-group mb-3">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Enter is Auto" required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Prise</label>
                        <input type="number" step="0.01" class="form-control" id="pries" name="prise" placeholder="Enter Pries" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Quality</label>
                        <select class="form-control" id="gender" name="quality" required>
                            <option value="">Select Quality</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                            <option value="Old">Old</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date" required>
                    </div>

                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="addProduct" class="btn btn-success">Add Product</button>
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