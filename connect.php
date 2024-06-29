<?php
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select * from table1";
$result = mysqli_query($link,$sql);
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> Ma So </th><th>Ho Ten</th><th>Ngay sinh</th><th>Nghe Nghiep</th></tr>';
while($row= mysqli_fetch_array($result)){
    $maso = $row["maso"];
    $hoten = $row["hoten"];
    $ngaysinh = $row["ngaysinh"];
    $nghenghiep= $row["nghenghiep"];
    echo '<tr><td>'.$maso.'</td><td>'.$hoten.'</td><td>'.$ngaysinh.'</td><td>'.$nghenghiep.'</td></tr>';

}
echo '</TABLE';
mysqli_free_result($result);
mysqli_close($link);
?>