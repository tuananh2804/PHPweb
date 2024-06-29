<?php
$IDPB = $_POST["IDPB"];
$TenPB = $_POST["TenPB"];
$Mota = $_POST["Mota"];
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "insert into phongban (IDPB, TenPB, Mota) values ('$IDPB' ,'$TenPB','$Mota')";
mysqli_query($link,$sql);
$sql2 = "select * from phongban";
$result = mysqli_query($link,$sql2);
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> IDNV </th><th>Ho Ten</th><th>Mo ta</th></tr>';
while($row= mysqli_fetch_array($result)){
  
    echo '<tr><td>'. $row["IDPB"].'</td><td>'.$row["TenPB"].'</td><td>'.$row["Mota"].'</td></tr>';x

}
echo '</TABLE';
mysqli_free_result($result);
mysqli_close($link);
?>