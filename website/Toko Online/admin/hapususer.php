<?php 
include "../connect.php";

$result = mysqli_query($conn,"SELECT * FROM user WHERE id='$_GET[id]'");

$data = mysqli_fetch_assoc($result);


mysqli_query($conn,"DELETE FROM user WHERE id='$_GET[id]'");

echo "<script>alert('user terhapus');</script>";
echo "<script>location='member.php';</script>";