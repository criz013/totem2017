<?php

namespace Controller;

use \W\Controller\Controller;

class AuthController extends Controller
{
	
	protected $db;
    protected $auth;
     
    public function __construct ()
    {
        $this->db = new \Model\DashboardModel;
        $this->auth = new \W\Security\AuthentificationModel;
    }

	/**
	* Login template
	*/
	public function login ()
    {
        if(!empty($_POST)) // Traite le formulaire
        {
            $id = $this->auth->isValidLoginInfo($_REQUEST['email'], $_REQUEST['password']);
            if($id > 0)
            {
                $user = $this->db->find($id);
                $this->auth->logUserIn($user);
                $this->redirectToRoute('dashboard_home');
            } else {
                $this->show('auth/login', ["msg"=>"Combinaison email/mot de passe invalide."]); // Affiche la vue login
            }
        } else {
            $this->show('auth/login'); // Affiche la vue login
        }
    }
	
	/**
	* Signin template
	*/
	public function signin()
	{
		if(!empty($_POST)){
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
             
            $user = [
                'first_name' => $_REQUEST['first_name'],
                'last_name' => $_REQUEST['last_name'],
                'email' => $_REQUEST['email'],
                'password' => $password,
                'phone' => $_REQUEST['phone'],
                'role' => 'user',
                'type' => $_REQUEST["type"],
                'created_at' => date('Y-m-d h:i:s'),
                'modified_at' => date('Y-m-d h:i:s')
            ];
             
            $res = $this->db->insert($user);
             
            if($res > 0)
            {
                $this->redirectToRoute('auth_login');
            } else {
                echo "Error! User not added to DB...";
            }
             
        } else {
			$this->show('auth/signin');
        }
	}
	
	/**
	* Logout function
	*/
    public function logout ()
    {
        $this->auth->logUserOut();
        $this->redirectToRoute('default_home');
    }
    
    /**
	* Lost Password function
	*/
	public function lostPassword ()
	{
		$this->show('auth/lostpassword');
	}
	

}