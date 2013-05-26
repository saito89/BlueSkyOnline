<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include("DA/userAD.php");
        $userAd = new userAD();
        $userAd->usuarioSLogin('saito89','hola');
        phpinfo();
        ?>
    </body>
</html>
