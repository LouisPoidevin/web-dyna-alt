<?php

function element($titre, $contenu, $niveau=1) {
    $content .= "<h{$niveau}>{$titre}</h{$niveau}>";
    $content .= "<div>{$contenu}</div>";
    
    return $content;
};

function parseElements($elements) {
    
    foreach ($elements as $elm) {

        $titre = $elm["titre"];
        $contenu = $elm["contenu"];

        if (isset($elm["niveau"])) {
            $niveau = $elm["niveau"];
            $tableau .= element($titre, $contenu, $niveau);
        } else {
            $tableau .= element($titre, $contenu);
        }
    }

    return $tableau;
}