<?php
    session_start();
    echo __FILE__;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <form method="POST">
        <input type="email" name="email">
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="ok">
    </form>
</body>
</html>