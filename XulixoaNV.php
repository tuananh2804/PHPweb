<?php

$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select IDNV from nhanvien";
$result =mysqli_query($link,$sql);

while($row= mysqli_fetch_array($result)){  
    $IDNV = $row['IDNV'];
    if (isset($_REQUEST[$IDNV])) {
        $del = "DELETE FROM nhanvien WHERE IDNV = '$IDNV'";
        $xoa = mysqli_query($link, $del);
    }
}
mysqli_free_result($result);
mysqli_close($link);
header("Location:XoaNV.php");
?>