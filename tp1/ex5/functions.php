<?php

function createHtmlTable($nbLignes,$nbColonnes){
    
    $tableau .= '<table border="3">';

        for ($l=0;$l<$nbLignes;$l++) {
            if ($l % 2 == 0) {
                $tableau .= '<tr style="font-weight: 800;">';
            } else {
                $tableau .= '<tr>';
            }
        
            for ($c=0;$c<$nbColonnes;$c++) {
                if ($c % 2 == 0) {
                    $tableau .= '<td style="color: red;">';
                } else {
                    $tableau .= '<td>';
                }
                $tableau .= "{$l}-{$c}</td>";
            }
            $tableau .= '</tr>';
        }

    $tableau .= '</table>';

    return $tableau;
};