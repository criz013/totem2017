<?php
/**
 * Page de modification du site internet
 */
$this->insert("back/part/head");
$this->insert("back/part/backConfigModif",['id'=>$id,'message'=>$message]);
$this->insert("back/part/footer");
?>
