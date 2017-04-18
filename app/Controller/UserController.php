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
     * @route /partenaire/[:id]
     *@param interger $id id de l'user
     */
    public function partenaire($id){
    	$this->show('front/partenaire',['id'=>$id]);
    }
    
    /**
     * @route /partenaire/update/[:id]
     * @param integer $id l'id de l utilisateur
     */
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
    		//$password           	= trim($_POST["password"]);
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
    		$motif ='`^0[1-9][0-9]{8}$`';
    		if (preg_match ( $motif, $phone ) )
    		{
    			$error++;
    			$message[] = 'Numéros de téléphone invalide';
    		}
    		
    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$error++;
    		}
    		
    		/**
    		 * Debut de l upload
    		 */

    	
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
    	$log = $this->getUser();
    	$objetUsersModel = new \W\Model\UsersModel;
    		$users =	$objetUsersModel->findAll();
    	    $this->show('back/gestionIncription',['users' => $users,'log'=>$log]);
    }

    /**
     * @route /aministrateur/gestion-inscription/detail/[:id]
     */
    public function inscriptionDetail($id){
    	$log = $this->getUser();
    	$objetUsersModel = new \W\Model\UsersModel;
    	$objetUsersProfilModel = new \Model\Users_profilModel;
    	$users =	$objetUsersModel->find($id);
    	$usersProfil = $objetUsersProfilModel->search(['id_users'=>$id]);
    	$this->show('back/gestionIncriptionDetail',['users' => $users,'usersProfil'=>$usersProfil,'log'=>$log]);
    }
    
    /**
     * @route /administrateur/gestion-inscription/valider/[:id]
     * @param integer $id l'id de l utilisateur
     */
    public function userValider($id){
    	$objetUsersModel = new \W\Model\UsersModel;
    	$objetUsersModel->update(['status'=>'valider'],$id);
    	$users =	$objetUsersModel->findAll();
    	$this->show('back/gestionIncription',['users' => $users]);
    }
    
    /**
     * @route /administrateur/gestion-inscription/refuser/[:id]
     * @param integer $id l'id de l utilisateur
     */
    public function userRefuser($id){
    	$objetUsersModel = new \W\Model\UsersModel;
    	$objetUsersModel->update(['status'=>'refuser'],$id);
    	$users =	$objetUsersModel->findAll();
    	$this->show('back/gestionIncription',['users' => $users]);
    }
    
    /**
     * @route /administrateur/gestion-inscription/traitement/[:id]
     * @param integer $id l'id de l utilisateur
     */
    public function userTraitement($id){
    	$objetUsersModel = new \W\Model\UsersModel;
    	$objetUsersModel->update(['status'=>'Cour'],$id);
    	$users =	$objetUsersModel->findAll();
    	$this->show('back/gestionIncription',['users' => $users]);
    }

}