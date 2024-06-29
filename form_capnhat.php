<form action="Xulicapnhat.php"<?php echo $row["IDPB"];?> method = "post">
<?php
$idpb = $_REQUEST['idpb'];
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select * from phongban where IDPB = '$idpb'";
$result = mysqli_query($link,$sql);
echo '<table >';
echo '<caption> Du lieu</caption>';
while($row= mysqli_fetch_array($result)){
    $IDPB = $row["IDPB"];
    $TenPB = $row["TenPB"];
    $Mota = $row["Mota"];
  //  $Diachi= $row["Diachi"];
    echo '<tr><td> IDPB </td><td><input type="text" name="IDPB" value ='.$IDPB.' readonly ></td></tr>
    <tr><td>Ten PB</td><td><input type="text" name="TenPB" value ='.$TenPB.' ></td></tr>
    <tr><td>Mo ta</td> <td><input type="text" name="Mota" value ='.$Mota.' ></td> </tr></tr>';

}
?>
                <tr>
                    <td></td>
                    <td>
                    <input type="submit" value="OK" type="button" >
                    <input type="button" value="Cancel">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="error-txt" id="validate" >
                       
                    </td>
                </tr>
            
        </form>
