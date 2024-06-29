<?php
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select * from phongban";
$result = mysqli_query($link,$sql);
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> IDNV </th><th>Ho Ten</th><th>Mo Ta</th><th>Thong tin NV</th></tr>';
while($row= mysqli_fetch_array($result)){
    
    echo '<tr><td>'.$row["IDPB"].'</td><td>'. $row["TenPB"].'</td><td>'. $row["Mota"].'</td> <td><a href="XemthongtinNVPB.php?idpb='. $row["IDPB"].'">Xem</a></td></tr>';

}
echo '</TABLE';
mysqli_free_result($result);
mysqli_close($link);
?>