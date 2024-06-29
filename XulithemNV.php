<?php
$IDNV = $_POST["IDNV"];
$TenNV = $_POST["TenNV"];
$IDPB =  $_POST['IDPB'];
$Diachi = $_POST["DiaChi"];
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "insert into nhanvien (IDNV,Hoten,IDPB,Diachi) values ('$IDNV' ,'$TenNV','$IDPB','$Diachi')";
mysqli_query($link,$sql);
$sql2 = "select * from nhanvien";
$result = mysqli_query($link,$sql2);
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> IDNV </th><th>Ho Ten</th><th>Mo ta</th> <th>Mo ta</th></tr>';
while($row= mysqli_fetch_array($result)){
   
    echo '<tr><td>'.$row["IDNV"].'</td><td>'.$row["Hoten"].'</td><td>'.$row["IDPB"].'</td><td>'.$row["Diachi"].'</td></tr>';

}
echo '</TABLE';
mysqli_free_result($result);
mysqli_close($link);
?>