<html>
<head>
    <title>购买宠物</title>
</head>
<body>
<form method="get" action="4.php">
    <table align="center" border="1">
    <tr>
        <td align="right">用户:</td><td><input type="text" name="username" /></td>
    </tr>
    <tr>
        <td align="right">密码:</td><td><input type="password" name="pwd" /></td>
    </tr>
    <tr>
        <td align="right">宠物:</td><td><input type="radio" name="price" value="200">狗(200元)
            <input type="radio" name="price" value="150">猫(150元)
            <input type="radio" name="price" value="180">兔(180元)
            <input type="radio" name="price" value="60">鹦鹉(60元)</td>
    </tr>

    <tr>
        <td align="right">宠物年龄:</td>
        <td>
            <select name="age" >
                <option value="
                <?php
                for($i=1;$i<=30;$i++)
                    echo "<option value=\"$i\">$i 岁
                </option>";
                 ?>"
            </select>
        </td>
    </tr>
    <tr>
        <td align="right">用户类型:</td><td><input type="checkbox" name="vip[]" value="vip客户">vip客户</td>
    </tr>
    <th>
        <td align="center"><input type="submit" name="sub" value="确定">
        <input type="reset" name="rst" value="重置"></td>
    </th>
    </table>
</form>
</body>
</html>
