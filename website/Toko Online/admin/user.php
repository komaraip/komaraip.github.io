<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
            <div class="panel-heading">
                Data User
            </div>
            <div class="panel-body">
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                        <thead>
                              <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                        <!-- Query Data -->
                        <?php 
                        $result = mysqli_query ($conn,"SELECT * FROM user ORDER BY id ASC");
                        ?>
                        <?php
                        $i = 1;
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- End of PHP -->
                              <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $data['username'] ?></td>
                                    <td><?= $data['password'] ?></td>
                                    <td><?= $data['level'] ?></td>
                                    <td>
                                        <a href="member.php?halaman=ubahproduk&id=<?= $data['id']; ?>" class="fa fa-pencil-square fa-2x"></a>
                                        <a href="member.php?halaman=hapusproduk&id=<?= $data['id']; ?>" class="fa fa-user-times fa-2x" onclick="return confirm('Yakin Dihapus???')"></a>
                                    </td>
                              </tr>
                        <?php $i++; } ?>
                        </tbody>
                  </table>
                  </div>
            </div>
      </div>
</div>