<?php
$IDPB = $_POST["IDPB"];
$TenPB = $_POST["TenPB"];
$Mota = $_POST["Mota"];
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "UPDATE phongban SET TenPB = '$TenPB',Mota = '$Mota' where IDPB ='$IDPB'";
mysqli_query($link,$sql);
header("Location: capnhat.php");

?>