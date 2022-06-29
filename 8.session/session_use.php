<?php
    session_start();

    $userid = $_SESSION["userid"];
    $username = $_SESSION["username"];
?>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <h2> 세션(userid):<?= $userid?> <br>
        <h2> username:<?= $username?>
    </body>
</html>
