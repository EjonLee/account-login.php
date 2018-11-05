<?php
session_start();
session_destroy();
echo "<script>";
echo "aler(\"您已经退出登录\");";
echo "location=\"session_1.php\";";
echo "</script>";
?>
