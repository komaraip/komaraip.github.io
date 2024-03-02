<?php 

if (isset($_POST['save'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $level = $_POST['level'];
  
      $result = mysqli_query($conn,
      "INSERT INTO user (username,password,level) VALUES 
      ('$username','$password','$level')");
  
      echo  "<div class='alert alert-info'>Data Tersimpan</div>";
      echo  "<meta http-equiv='refresh' content='1;url=member.php'>";
  }

?>

<!-- HTML FORM -->
<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
            <div class="panel-heading">
                  Tambah User
            </div>

            <div class="panel-body">
                  <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                              <label>Password</label>
                              <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                              <label>Level</label>
                              <input type="text" class="form-control" name="level">
                        </div>
                        <button class="btn btn-primary" name="save">Simpan</button>
                  </form>
            </div>
      </div>
</div>