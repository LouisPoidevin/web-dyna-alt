<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2</title>
</head>
<body>
    <a href="/web-dyna-alt/tp1/ex2.php?message=Hello&size=10&color=red">Afficher Hello en rouge en 10px</a>
    <a href="/web-dyna-alt/tp1/ex2.php?message=Hello">Afficher Hello</a>
    <a href="/web-dyna-alt/tp1/ex2.php?message=Hello">Afficher Hello</a>

    <form method="GET">
        <label for="message">Message : </label>
        <input type="string" value="" name="message" id="message">
        
        <label for="size">Size : </label>
        <input type="number" value="" name="size" id="size">

        <label for="color">Color : </label>
        <input type="string" value="#FF0000" name="color" id="color">

        <input type="submit" value="Valider">
    </form>

    <?php
    $message=$_GET["message"];
    $size=$_GET["size"];
    $color=$_GET["color"];

    echo "<div style='font-size: {$size}px;color:{$color}'>{$message} {$size}px en rouge</div>";
    ?>
</body>
</html>