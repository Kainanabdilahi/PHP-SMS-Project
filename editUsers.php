<?php include("./src/connection.php") ?>
<?php include("./src/sidebar.php")?>

<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $username = $_GET["username"];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $type = $_GET['type'];

  }else{
    $id = "";
    $username ="" ;
    $password ="" ;
    $email ="" ;
    $type ="" ;

  }
  
  ?>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">
          <div class="container my-2">
            <h3>Edit user Information</h3>
             <!-- Start Form  -->
            <form action="./usersOp.php?id=<?php echo $id;?>" method="post" class="bg-white p-4 rounded">
                    <div class="form-group mb-3">
                        <label for="">ID</label>
                        <input type="text"  class="form-control" name="id" placeholder="ID is Auto" value="<?php echo $id?>"  required disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $username?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="<?php echo $password?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $email?>" required>
                    </div>
                    <div class="form-group mb-3">
                  <label for="">Type</label>
                  <select class="form-control" id="type" name="type" required>
                      <?php if ($type != 'admin' && $type != 'user') : ?>
                          <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                      <?php endif; ?>
                      <option value="admin" <?php echo ($type == 'admin') ? 'selected' : ''; ?>>admin</option>
                      <option value="user" <?php echo ($type == 'user') ? 'selected' : ''; ?>>user</option>
                  </select>
              </div>

                  <div class="form-group  d-flex justify-content-end gap-2">
                    <button type="submit" name="editUser" class="btn btn-info ">Update info</button>
                    <a href="./users.php" class="btn btn-danger">Cencel</a>
                  </div>
            </form>

                <!-- End Form  -->
            </div>
        </div>
      </div>
    </div>

    <!-- End Content  -->

<?php include("./src/footer.php")?>