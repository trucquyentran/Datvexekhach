<?php
include "../connect.php";
if (!isset($_SESSION['mySessionAdmin'])){
    echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
    header("Refresh: 0;url=index.php");
} 
$this_id = $_POST['BX_Ma'];


$sql = "DELETE FROM benxe where BX_Ma=$this_id";
mysqli_query($conn, $sql);
echo "<script>alert('Xoá thành công');</script>";
header('Refresh: 0;url=QLBX.php');

?>

