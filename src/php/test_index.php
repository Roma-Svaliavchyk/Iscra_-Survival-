<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/php/register.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="pasvord" name="pass">
        <input type="text" placeholder="repeat pasvord" name="repeatpass">
        <input type="text" placeholder="email" name="email">        
        <button type="submit">reg</button>
    </form>

    <form action="login.php" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="pasvord" name="pass">
        <button type="submit">log</button>
    </form>
</body>
</html>
