<?php
/**
 * Page de modification du site internet
 */
$this->insert("back/part/head",['log'=>$log]);
$this->insert("back/part/backConfigModif",['id'=>$id,'message'=>$message, 'alertclass'=>$alertclass, 'icoclass'=>$icoclass]);
$this->insert("back/part/footer");
?>

