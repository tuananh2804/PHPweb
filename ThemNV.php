
<?php 
require("session.php");
 $link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
 $sql = "select IDPB from phongban";
$result = mysqli_query($link,$sql);  
?>
      <form action="XulithemNV.php" method = "post">
            <table>
                <tr>
                    <td>IDNV</td>
                    <td><input type="text" name="IDNV" ></td>
                </tr>
                <tr>
                    <td>Ten NV</td>
                    <td><input type="text" name="TenNV" ></td>
                </tr>
                <tr>
                <td>IDPB</td>
                <td>
                <select id="IDPB" name ="IDPB">
                <?php
                while ($row = mysqli_fetch_array($result))
                {
                echo '<option value="'.$row['IDPB'].'">'.$row['IDPB'].'</option>';
                    }
                    ?>
                </select>
                </td>
                </tr>
                <tr>
                    <td>Dia chi</td>
                    <td><input type="text" name="DiaChi" ></td>
                </tr>
               
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
            </table>
        </form>
    
