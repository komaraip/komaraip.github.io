<?php 

$result = mysqli_query($conn,"SELECT * FROM user WHERE id='$_GET[id]'");

$data = mysqli_fetch_assoc($result);

if (isset($_POST['edit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $level = $_POST['level'];
      $id = $_POST['id'];

      $result = mysqli_query($conn,
      "UPDATE user SET username='$username',password='$password',level='$level' WHERE id='$id' ");

    if (mysqli_affected_rows($conn) > 0) {
      echo "<script> alert('data produk telah diubah'); </script>";
      echo "<script> location='member.php'; </script>";
    }else {
      echo "<script>alert('data produk gagal diubah');</script>";
      echo "<script>location='member.php';</script>";
    }
}
?>

<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
            <div class="panel-heading">
                  Edit User
            </div>

            <div class="panel-body">
                  <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="form-group">
                              <label>Password</label>
                              <input type="text" class="form-control" name="password" value="<?= $data['password'] ?>">
                        </div>
                        <div class="form-group">
                              <label>Level</label>
                              <input type="text" class="form-control" name="level" value="<?= $data['level'] ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <button class="btn btn-primary" name="edit">Simpan</button>
                  </form>
            </div>
      </div>
</div>