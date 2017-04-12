<?php

namespace Controller;

use \W\Controller\Controller;

class ProfileController extends Controller
{
    protected $companyTab;
    protected $teamTab;
    
    public function __construct ()
    {
        $this->companyTab = new \Model\ProfileModel;
        $this->teamTab = new \Model\EquipagesModel;
    }
    
    public function entreprise ($name)
    {
        $company = $this->companyTab->search(["company_name" => $name]);
        
        $team = $this->teamTab->find($company[0]["team_id"]);

        $this->show('profile/profile', ["company" => $company[0], "team" => $team]);
    }
    
    
    
}