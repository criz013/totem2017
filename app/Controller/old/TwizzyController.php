<?php

namespace Controller;

use \W\Controller\Controller;

class TwizzyController extends Controller
{
    protected $companyTab;
    protected $teamTab;
    protected $userTab;
    
    public function __construct ()
    {
        $this->profileTab = new \Model\ProfileModel;
        $this->teamTab = new \Model\EquipagesModel;
        $this->userTab = new \Model\DashboardModel;
    }
    
    public function createTeam ()
    {
        $auth = new \W\Security\AuthentificationModel;
        
        if(!empty($_POST))
        {
            $p = $_POST;
            
            $userInfo = [
                "last_name" => $p["last_name"],
                "first_name" => $p["first_name"],
                "email" => $p["email"],
                "password" => $auth->hashPassword($p["password"])
            ];
            
            $teamInfo = [
                "team_hashtag" => "#".$p["team_hashtag"],
                "team_pilot_name" => $p["team_pilot_name"],
                "team_copilot_name" => $p["team_copilot_name"],
                "team_pilot_firstname" => $p["team_pilot_firstname"],
                "team_copilot_firstname" => $p["team_copilot_firstname"],
                "team_pilot_pic" => $p["team_pilot_pic"],
                "team_copilot_pic" => $p["team_copilot_pic"],
                "team_pilot_bio" => $p["team_pilot_bio"],
                "team_copilot_bio" => $p["team_copilot_bio"],
                "pilot_drivinglicence" => $p["pilot_driving_licence"],
                "copilot_drivinglicence" => $p["copilot_driving_licence"],
                "contractfilled_upload" => $p["contractfilled_upload"],
            ];
            
            $profileInfo = [
                "company_name" => $p["company_name"],
                "company_description" => $p["company_description"],
                /*"company_logo" => $p["company_logo"],*/
                "company_link" => $p["company_link"],
            ];
            
            $userReq = $this->userTab->insert($userInfo);
            
            if($userReq>0)
            {
                $teamInfo["user_id"] = $userReq["id"];
                $teamReq = $this->teamTab->insert($teamInfo);
                
                if($teamReq>0)
                {
                    $profileInfo["team_id"] = $teamReq["id"];
                    $profileReq = $this->profileTab->insert($profileInfo);
                    
                    $this->redirectToRoute('profile_entreprise', ['name' => $p["company_name"]]);
                }
    
            }
            
        }
    }
    
    
    
}