<?php

namespace Controller;

use \W\Controller\Controller;

class DashboardController extends Controller
{
    protected $db;
    protected $auth;
    protected $websiteTable;
     
    public function __construct ()
    {
        $this->db = new \Model\DashboardModel;
        $this->auth = new \W\Security\AuthentificationModel;
        $this->websiteTable = new \Model\WebsiteModel;
    }
    
    //deleteAccount(id) => pour supprimer un compte
    //editAccount(id) => pour éditer les informations d'un compte
    public function editAccount () {
        if(!empty($_POST))
        {
            $userUpdate = [
                "first_name" => $_POST["first_name"],
                "last_name" => $_POST["last_name"],
                "email" => $_POST["email"],
                "phone" => $_POST["phone"]
            ];
            
            if(!empty($_POST["password"]))
            {
                $userUpdate["password"] = hashPassword($_POST["password"]);
            }
            
            $user = $this->getUser();
            
            $req = $this->db->update($userUpdate, $user["id"]);

            if($req > 0)
            {
                $this->auth->refreshUser();
                $user = $this->getUser();
                $this->show('dashboard/settings_account', array('user' => $user, 'msg' => 'Compte mis à jour avec succès !'));
            }
            
        } else {
            $user = $this->getUser();
            $this->show('dashboard/settings_account', array('user' => $user, 'msg' => 'Vous pouvez modifier et sauvegarder les paramètres de votre compte'));
        }
    }
    
    //userCreateProfile => pour ajouter des données et activer le profil d'un compte
    //userEditProfile(id) => pour éditer le profil d'un compte
    //userDeleteProfile(id) => pour effacer les données et désactiver le profil d'un compte
    
    //adminListUsers => pour lister l'ensemble des utilisateurs par type
    //adminEditUser(id) => pour éditer un compte utilisateur
    //adminDeleteUser(id) => pour supprimer un compte utilisateur
    
    //adminEditChallengeInformations => pour éditer les informations du site
    public function editChallenges ()
    {
        $user = $this->getUser();
        $this->show('dashboard/settings_challenges', ["user" => $user]);
    }
    //adminEditWebsiteInformations => pour éditer les informations du site
    public function editWebsite ()
    {
        if(!empty($_POST))
        {
            $websiteUpdate = $_POST;
            $req = $this->websiteTable->updateInfo($websiteUpdate);
            print_r($req);
        } else {
            $user = $this->getUser();
            $websiteInformations = $this->websiteTable->getInfo();
            $this->show('dashboard/settings_website', array('user' => $user, 'website' => $websiteInformations[0]));
        }
    }
    //adminEditSection(id) => pour éditer le contenu d'une section
    
    //dashboard_home template
    public function home ()
    {
        $user = $this->getUser();
        $this->show('dashboard/dashboard', ["user" => $user]);
    }
    
    
}