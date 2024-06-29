
<?php
require("session.php");
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select * from nhanvien";
$result = mysqli_query($link,$sql);
echo '<form action="XulixoaNV.php" method = "post">';
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> IDNV </th><th>Ho Ten</th><th>Ma phong ban</th><th>Dia Chi</th><th>Xoa</th></tr>';
while($row= mysqli_fetch_array($result)){
   
    echo '<tr><td>'. $row["IDNV"].'</td><td>'. $row["Hoten"].'</td><td>'.$row["IDPB"].'</td><td>'.$row["Diachi"].'</td><td><input type="checkbox" name ="'.$row["IDNV"].'" id ="'.$row["IDNV"].'"></td></tr>';

}
echo'<td><input type="submit" value = "xoa tat ca"></td>';
echo '</TABLE';
echo '</form>';
mysqli_free_result($result);
mysqli_close($link);

?>


