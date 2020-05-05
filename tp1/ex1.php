<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <a href="/web-dyna-alt/tp1/ex1.php?message=Hello">Afficher Hello</a>
        <?php
            echo "Voici le message : ".$_GET["message"];
        ?>
    </body>
</html>