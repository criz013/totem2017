<?php

// JE PEUX UTILISER LA VARIABLE $url
// CAR LE CONTROLLER A TRANSMIS LE TABLEAU ASSOCIATIF [ "url" => "" ]

// DEBUG 
//echo $url;

// JE TRANSMETS UNE VARIABLE $title
// QUE JE VAIS POUVOIR UTILISER DANS partials/header.php
// POUR RENDRE L'AFFICHAGE DYNAMIQUE
$this->insert("partials/header", [ "title" => "LE TITRE DE VOTRE PAGE" ]);

// COTE PENIBLE DE W
// JE SUIS OBLIGE DE TRANSMETTRE LES INFOS AVEC UN NOUVEL TABLEAU ASSOCIATIF
$this->insert("partials/section-article-detail", [ "url" => $url ] );

$this->insert("partials/footer");
