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