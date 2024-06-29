<?php
require("session.php");
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
?>
        <form action="xulithemPB.php" method = "post">
            <table>
                <tr>
                    <td>IDPB</td>
                    <td><input type="text" name="IDPB" ></td>
                </tr>
                <tr>
                    <td>Ten PB</td>
                    <td><input type="text" name="TenPB" ></td>
                </tr>
                <tr>
                    <td>Mo ta</td>
                    <td><input type="text" name="Mota" ></td>
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
    
