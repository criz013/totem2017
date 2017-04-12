<?php

namespace Model;

use \W\Model\Model;

class WebsiteModel extends Model
{
	//from ancien site
	 public function getInfo ()
     {
          return $this->findAll();
     }
     
     public function updateInfo ($data)
     {
           //to do
           print_r($data);
     }
     // fin from ancien site
}
