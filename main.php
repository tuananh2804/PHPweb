<?php
require("session.php");
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");

?>
 <a href="XemthongtinNV.php">Xem thong tin NV</a><br>
<a href="XemthongtinPB.php">Xem thong tin PB</a><br>
<a href="timkiem.php">Tim kiem </a><br>
<a href="ThemNV.php">Them NV</a><br>
<a href="ThemPB.php">Them PB</a><br>
<a href="capnhat.php">Cap nhat PB</a><br>
<a href="XoaNV.php">Xoa NV</a>