<?php

// JE COMPOSE MA PAGE AVEC 3 TRANCHES DE HTML
$this->insert("part/header");
$this->insert("part/users-section-signup", [ "message" => $message ]);
$this->insert("part/footer");
