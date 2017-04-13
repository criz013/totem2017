<?php

// COMPOSER AVEC 3 TRANCHES
$this->insert("part/header");
$this->insert("part/section-users-login", [ "message" => $message ]);
$this->insert("part/footer");
