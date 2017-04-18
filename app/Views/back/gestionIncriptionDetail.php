<?php
/**
* Page d'accueil du back Office
*/
$this->insert("back/part/head",['log'=>$log]);
$this->insert("back/part/usersGestionDetail",['users' => $users,'usersProfil'=>$usersProfil]);
$this->insert("back/part/footer");
