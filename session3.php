<?php
session_start();
if(isset($_SESSION['name'])&&isset($_SESSION['password'])){
    $username = $_SESSION['name'];
    $password = $_SESSION['password'];
    echo "欢迎用户".$username."登录系统"."<br>";
    echo "你的密码是\"".$password."\""."<br>";
    echo "<br /><a href=\"session1.php\">返回</a>";
    echo "<br /><a href=\"session4.php\">注销</a>";
}
else{
    echo "Session中无登录信息！<br>";
    echo "<br /><a href=\"session1.php\">登录</a>";
}
?>
