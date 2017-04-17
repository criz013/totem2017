<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 16:29
 */

namespace Controller;
use \W\Controller\Controller;

class UserController extends Controller
{

     /**
     * Renvois vers la fiche récapitulatif de l'utilisateur
     * @route /administrateur/partenaire/[:id]
     *@var interger $id id de l'user
     */
    public function partenaire($id){
    	//$this->show('front/partenaire',['id'=>$id]);
    }
    
    public function updateUser($id){
    	
    	$message = [];
    	$error = 0;
    	
    	if (!empty($_POST) && isset($_POST))
    	{
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$last_name           	= trim($_POST["last_name"]);
    		$first_name             = trim($_POST["first_name"]);
    		$phone           		= trim($_POST["phone"]);
    		$email            		= trim($_POST["email"]);
    		$password           	= trim($_POST["password"]);
    		$avatar            		= trim($_POST["avatar"]);
    		$logo            		= trim($_POST["logo"]);
    		$name_compagny          = trim($_POST["name_compagny"]);
    		$link            		= trim($_POST["link"]);
    		$description            = trim($_POST["description"]);
    		$haschtage              = trim($_POST["haschtage"]);
    	
    		if(!is_string($last_name) || ( mb_strlen($last_name) < 5)){
    			$error++;
    			$message[] = 'Le champ nom invalide';
    		}
    		if(!is_string($first_name) || ( mb_strlen($first_name) < 5)){
    			$error++;
    			$message[] = 'Le champ prenom invalide';
    		}
    		//Numéro de télphone français sous la form 00 00 00 00 00
    		if (!preg_match ( " \^(\d\d\s){4}(\d\d)$\ " , $phone ) )
    		{
    			$error++;
    			$message[] = 'Numéros de téléphone invalide';
    		}
    		
    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$error++;
    		}

    	
    		if($error < 1)
    		{
    			
    			$objetUsersModel = new \W\Model\UsersModel;
    			$objetUsersProfilModel = new \Model\Users_profilModel;
    			
    			     $objetUsersModel->update([
    			     			"email"      		=> $email,
    			     			"last_name"  		=> $last_name,
    			     			"first_name" 		=> $first_name,
    			     			"phone"      		=> $phone,
    			     			"modified"    		=> date('Y-m-d h:i:s'),
    			     			"username" 			=> $email], $id);
    			   $x =  $objetUsersProfilModel->search(['id_users'=>$id]);
    			   
    			     $objetUsersProfilModel->update(['name_compagny'=>$name_compagny ,
    			     								 'description'=>$description, 
    			     								 'logo'=>$logo, 
    			     								 'link'=>$link, 
    			     								 'haschtag'=>$haschtage, 
    			     								 'avatar'=>$avatar],$x['id']);
    		}
    	}
    	
    	//$this->show('',['id'=>$id,'message'=>$message]);
    	
    }

    /**
     * @route /aministrateur/gestion-inscription
     */
    public function inscription(){
    	$objetUsersModel = new \W\Model\UsersModel;
    		$users =	$objetUsersModel->findAll();
    	    $this->show('back/gestionIncription',['users' => $users]);
    }

    /**
     * @route /aministrateur/gestion-inscription/detail/[:id]
     */
    public function inscriptionDetail($id){

    }

}