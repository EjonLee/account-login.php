<?php
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role']=='user'){
        header("location:user.php");
        exit();
    }
    elseif($_SESSION['role']=='guest'){
        header("location:Guest.php");
    }
}
?>
<html>
<head>
    <title>用户登录</title>
</head>
<body>
<form method="post" action="SaveRole.php">
    <table border="1">
        <tr>
            <td>您的身份：</td>
            <td>
                <select name="role">
                    <option value="user" checked>会员客户
                    <option value="guest">游客
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="确定">
    <input type="reset" name="Reset" value="重置">
</form>
</body>
</html>
