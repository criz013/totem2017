<?php
/**
* Page d'accueil du back Office
*/
$this->insert("back/part/head");
$this->insert("back/part/usersGestion",['users' => $users]);
$this->insert("back/part/footer");