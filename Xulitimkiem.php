<?php
$Selectedvalue = $_POST["radiobutton"];
$textvalue = $_POST["text"];
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
if($Selectedvalue == "IDNV")
{
    $sql = "select * from nhanvien where IDNV = '$textvalue'";
    
}
else if ($Selectedvalue == "Ho Ten")
{
    $sql = "select * from nhanvien where Hoten = '$textvalue'";
    
}
else if ($Selectedvalue == "Dia Chi")
{
    $sql = "select * from nhanvien where Diachi = '$textvalue'";
    
}
$result = mysqli_query($link,$sql);
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> IDNV </th><th>Ho Ten</th><th>Ma phong ban</th><th>Dia Chi</th></tr>';
while($row= mysqli_fetch_array($result)){
    
    echo '<tr><td>'.$row["IDNV"].'</td><td>'.$row["Hoten"].'</td><td>'.$row["IDPB"].'</td><td>'.$row["Diachi"].'</td></tr>';

}
echo '</TABLE';
mysqli_free_result($result);
mysqli_close($link);
?>