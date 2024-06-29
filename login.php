<?php
session_start();
$_SESSION['loggendin'] = false;
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
?>
<form action="xulilogin.php" method ="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password"></td>
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
 <a href="XemthongtinNV.php">Xem thong tin NV</a><br>
<a href="XemthongtinPB.php">Xem thong tin PB</a><br>
<a href="timkiem.php">Tim kiem </a><br>
