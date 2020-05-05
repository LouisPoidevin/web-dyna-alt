<?php

function createHtmlTable($nbLignes,$nbColonnes){
    
    $tableau="
    echo "<table border="3">";

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
    ";

    return $tableau;
};