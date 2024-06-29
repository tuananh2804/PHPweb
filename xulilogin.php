<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$link = mysqli_connect("localhost","root","") or die (" ko the ket noi");
mysqli_select_db($link,"dulieu");
$sql = "select * from admin where username = '$username' and password ='$password' ";
$result =mysqli_query($link,$sql);
$count = mysqli_num_rows($result);
if($count<1 ){
    header("Location:login.php");
}
else{
    $_SESSION['loggendin'] = true;
    header("Location: main.php");
    exit();
}
?>

<!-- <form action="xulilogin.php">
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
        </form> -->