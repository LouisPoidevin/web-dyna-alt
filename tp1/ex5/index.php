<!DOCTYPE html>
<html>

    <form method="POST">
        <label for="nblignes">Lignes : </label>
        <input type="number" value="1" name="nblignes"></textarea>
        <label for="nbColonnes">Colonnes : </label>
        <input type="number" value="1" name="nbColonnes"></textarea>
        <input type="submit" value="Valider">
    </form>

    <?php
        include "functions.php";
        $nblignes = $_POST["nblignes"];
        $nbColonnes = $_POST["nbColonnes"];
        
        echo createHtmlTable($nblignes,$nbColonnes);
    ?>

</html>