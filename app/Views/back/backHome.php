<?php
/**
* Page d'accueil du back Office
*/
$this->insert("back/part/head",['log'=>$log]);
$this->insert("back/part/bodyHome",['web'=>$web]);
$this->insert("back/part/footer");