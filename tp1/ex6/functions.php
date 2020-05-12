<?php

function element($titre, $contenu, $niveau=1) {
    $content .= "<h{$niveau}>{$titre}</h{$niveau}>";
    $content .= "<div>{$contenu}</div>";
    
    return $content;
};

function parseElements($elements) {
    
    for ($i=0;$i<count($elements);$i++) {

        $titre = $elements[$i]["titre"];
        $contenu = $elements[$i]["contenu"];

        if (count($elements[$i]) > 2) {
            $niveau = $elements[$i]["niveau"];

            $tableau .= element($titre, $contenu, $niveau);
        } else {
            $tableau .= element($titre, $contenu);
        }
    }

    return $tableau;
}