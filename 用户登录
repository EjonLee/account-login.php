<html>
<head>
    <title>用户登录</title>
</head>
<body>
<form method="post" action="6.php">
    <table border="1">
    <tr>
        <td>用户:</td>
        <td><input type="text" name="username" value="
        <?php
            if(isset($_COOKIE["name"]))
                echo $_COOKIE["name"];
            ?>
        " /></td>
    </tr>
    <tr>
        <td>密码:</td>
        <td><input type="password" name="userpwd" value="
        <?php
            if(isset($_COOKIE["password"]))
                echo $_COOKIE["password"];
            ?>
        " /></td>
    </tr>
    </table>
<input type="submit" name="submit" value="确定">
<input type="reset" name="reset" value="重置">
</form>
</body>
</html>
