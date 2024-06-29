<?php
$link = mysqli_connect("localhost","root","01012003") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select * from sinhvien";
$result = mysqli_query($link,$sql);
echo '<table border="1" width = "100%">';
echo '<caption> Du lieu</caption>';
echo '<tr><th> IDNV </th><th>Ho Ten</th><th>Ma phong ban</th><th>Dia Chi</th></tr>';
while($row= mysqli_fetch_array($result)){
  
    echo '<tr><td>'. $row["ID"].'</td><td>'.$row["name"].'</td><td>'.$row["age"].'</td><td>'.$row["university"].'</td></tr>';

}
echo '</TABLE';
mysqli_free_result($result);
mysqli_close($link);
?>