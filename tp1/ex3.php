<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <form method="POST">
            <label for="message"> Message : </label>
            <input type="textarea" value="" name="message" id="message">
            <label for="size">Size : </label>
            <input type="number" value="10" name="size" id="size">
            <label for="color">Color :  </label>
            <input type="color" value="" name="color" id="color">
            <input type="submit" value="Valider">
        </form>

        <a href="/web-dyna-alt/tp1/ex2.php?message=hello1&size=15&color=%23ff0000">Afficher msg1</a>
        <a href="/web-dyna-alt/tp1/ex2.php?message=hello2&size=25&color=%2308ff00">Afficher msg2</a>
        <a href="/web-dyna-alt/tp1/ex2.php?message=hello3&size=42&color=%230088ff">Afficher msg3</a>
        
        <?php
            $message=$_POST["message"];
            $size=$_POST["size"];
            $color=$_POST["color"];

            if (empty($message) or empty($size) or empty($color)){
                echo '>_ Pas de message fournie ! '; 
            } else {
                echo "<div style='font-size: {$size}px;color:{$color}'> {$message} </div>";
            }
        ?>
    </body>
</html>