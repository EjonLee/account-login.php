<?php
if(isset($_COOKIE["name"])&&isset($_COOKIE["password"])){
    $username=$_COOKIE["name"];
    $password=$_COOKIE["password"];
    echo "欢迎用户".$username."登录系统"."<br>";
    echo "你的密码是\"".$password."\""."<br>";
    echo "<br /><a href='8.php\'>注销</a>&nbsp;&nbsp;<a href='1.php\'>返回首页</a> ";
}
else{
    echo "你的登录信息没有被保存！<br>";
    echo "<br /><a href='1.php'\>返回首页</a> ";
}
?>
