<?php
$username=$_POST["username"];
$userpwd=$_POST["userpwd"];
setcookie("name",$username,time()+14*24*60*60);
setcookie("password",$userpwd,time()+14*24*60*60);
echo "<script>";
echo "alert(\"登录密码将保存两周时间！\");";
echo "location.href=\"7.php\" ";
echo "</script>";
?>
