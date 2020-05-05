<?php
    include "header.php";

    $nblignes = $_GET["nblignes"];
    $nbColonnes = $_GET["nbColonnes"];

    echo "<table border='3'>";

        for ($l=0;$l<$nblignes;$l++) {
            if ($l % 2 == 0) {
                echo '<tr style="font-weight: 800;">';
            } else {
                echo '<tr>';
            }
        
            for ($c=0;$c<$nbColonnes;$c++) {
                if ($c % 2 == 0) {
                    echo '<td style="color: red;">';
                } else {
                    echo '<td>';
                }
                echo "{$l}-{$c}</td>";
            }
            echo '</tr>';
        }

    echo "</table>";

    echo '
    <a href="/web-dyna-alt/tp1/ex4.php?nblignes=2&nbColonnes=2">2x2</a>
    <a href="/web-dyna-alt/tp1/ex4.php?nblignes=5&nbColonnes=5">5x5</a>
    <a href="/web-dyna-alt/tp1/ex4.php?nblignes=10&nbColonnes=8">10x8</a>
    ';

    include "footer.php";
?>