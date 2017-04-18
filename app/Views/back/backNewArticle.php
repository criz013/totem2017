<?php
/**
 * Page de configuration du site internet
 */
$this->insert("back/part/head",['log'=>$log]);
$this->insert("back/part/backArticleCreate",['message'=>$message, 'alertclass'=>$alertclass, 'icoclass'=>$icoclass]);
$this->insert("back/part/footer");