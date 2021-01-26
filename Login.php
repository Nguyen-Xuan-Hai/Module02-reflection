<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <div class="login"></div>
    <h2>login</h2>
    <input type="text" name="username" size="30" placeholder="username">
    <input type="password" name="password" size="30" placeholder="password">
    <input type="submit" value="Sign in">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET["username"];
        $password = $_GET["password"];

        if($username === "admin" && $password === "admin") {
            header('Location:Login_welcome.php');
        }else{
            echo "<h2><span style='color:red'>Bạn đã nhập sai thông tin</span></h2>";
        }
    }
    ?>
</form>
</body>
</html>