<?php
/**
* Page d'accueil du back Office
*/
$this->insert("back/part/head",['log'=>$log]);
$this->insert("back/part/usersGestion",['users' => $users]);
$this->insert("back/part/footer");