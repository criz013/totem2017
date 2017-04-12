<?php

namespace Controller;

use \W\Controller\Controller;

class GlobalsController extends Controller
{
    public $globals;
    
    public function __construct ()
    {
        $this->getWebsiteInformations();
    }
    
    private function getWebsiteInformations ()
    {
        $db = new \Model\WebsiteModel;
        
        $website = $db->findAll();
        
        if ($website>0)
        {
            $this->globals = $website[0];
        }
    }
    
    public function getData ()
    {
        return $this->globals;
    }
    
}