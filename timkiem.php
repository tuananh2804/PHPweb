<?php
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
?>

<form method ="post" action="xulitimkiem.php">
    <table>
        <tr>
            <td><input type="radio" name="radiobutton" value="IDNV">IDNV</td>
            <td><input type="radio" name="radiobutton" value = "Ho Ten">Ho Ten</td>
            <td><input type="radio" name="radiobutton" value ="Dia chi">Dia chi</td>
        </tr>
        <tr>
            </table>
            
            <td><input type="text" name="text" id="text"></td>
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
    </form>