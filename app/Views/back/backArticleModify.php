<?php
/**
 * Page de configuration du site internet
 */
$this->insert("back/part/head");
$this->insert("back/part/backArticleContentModify",['id'=>$id,'message'=>$message]);
$this->insert("back/part/footer");