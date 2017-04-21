<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 15:31
 */

namespace Controller;

use \W\Controller\Controller;
use \Model\ChallengeModel;
use \Model\WebsiteModel;
use \Model\UsersModel;
use \Model\UsersProfilModel;
use \Controller\UserController;

class HomePageController extends Controller
{

	
    /**
     * @route /
     */
    public function index(){
    	
    	$loggedUser = $this->getUser();

        $WebModel = new WebsiteModel;
        $web = $WebModel->findAll();
        
        $objetArticleModel = new \Model\revue_pressModel;
        $revue =	$objetArticleModel->findAll('dateCreate', 'ASC', 4);

        // on recupere les challenges
        $challengeModel = new ChallengeModel();
        $challenges     = $challengeModel->findAll("year","desc");

        // on recupere la date de debut du prochain evenement pour le countdown
        $nextChallengeStart = $challenges[0]['date_start'];

        // on regarde si un challenge est en cours
        $currrentTime = time();
        $isChallengeEnCour = false;
        
        $objectUsersModel = new  UsersModel;
        
       	$objectUserController = new  UserController;
       	
        //$sponsors = $objectUsersModel->sponsors(["role"=>"sponsor"]);
        $sponsorsValides = $objectUsersModel->sponsorsValides();
      
       // echo 'vous etes ici';
        $objectUserController->updateSocials($sponsorsValides);
       
        foreach ( $challenges as $challenge) {
            if( strtotime($challenge['date_start']) <= $currrentTime && strtotime($challenge['date_end']) >= $currrentTime) {
                $isChallengeEnCour = true;
            }  

        }
        
		
    	$this->show('front/home',[
    	    'log'           => $loggedUser,
            'message'       => '',
            'challenges'    => $challenges,
            'web'           => $web,
            'nextChallengeStart' => $nextChallengeStart,
            'isChallengeEnCour' => $isChallengeEnCour,
            'sponsorsValides'=> $sponsorsValides,
    		'revue'=>$revue,
        ]);
    }

    /**
     * @route /login
     * Login sur l'email.
     * 
     */
    public function login(){
     	//$objetUsersProfilModel = new \Model\Users_profilModel;
    	 
    	$message = [];
    	$error = 0;
    	$redirection = '';
    	if(isset($_POST['operation']) && $_POST['operation'] == 'login'){
    		// RECUPERER LES INFOS
    		$login      = trim($_POST["email"]); // Le login est l email de l'utilisateur
    		$password   = trim($_POST["password"]);
    		
    		if(!is_string($password)  && ( mb_strlen($password) < 5 ))
    		{
    			$error++;
    			$message[] = 'Mot de passe incorrect';
    		}
    		
    		// UN PEU DE SECURITE
    		if (!filter_var($login, FILTER_VALIDATE_EMAIL))
    		{
    			$error++;
    			$message[] = 'Login incorect';
    		}
    		
    		
    		if($error == 0)
    		{
    			// ON VA VERIFIER SI LES INFOS CORRESPONDENT A UNE LIGNE DANS LA TABLE MYSQL
    			// ON VA UTILISER LA CLASSE \W\Security\AuthentificationModel
    			$objetAuthentificationModel = new \W\Security\AuthentificationModel;
    			// $idUser => 0 SI AUCUNE LIGNE NE CORRESPOND
    			// $idUser => id DE LA LIGNE TROUVEE
    			$idUser = $objetAuthentificationModel->isValidLoginInfo($login, $password);
    			if ($idUser > 0)
    			{
    				
    				$objetUsersModel = new \W\Model\UsersModel;
    				// ON RECUPERE TOUTE LA LIGNE SUR L'UTILISATEUR
    				$tabUser = $objetUsersModel->find($idUser);
    				// JE VAIS MEMORISER CES INFOS DANS UNE SESSION
    				$objetAuthentificationModel->logUserIn($tabUser);
    				$loggedUser = $this->getUser();
    				$redirection =$this->generateUrl('homePage_index');
    				// ON PEUT FAIRE UNE REDIRECTION VERS UNE PAGE PROTEGEE
    				//$this->redirectToRoute('homePage_index',['message'=>$message,'loggedUser'=>$loggedUser]);
    			}
    			else
    			{
    				// KO
    				$message[] = "IDENTIFIANTS INCORRECTS";
    			}
    			
    		}// error
    	}//isset
    		$msgJson = ['message'=>$message,'redirection'=>$redirection];
    		$this->showJson($msgJson);
    }

    /**
     * @route /logout
     */
    public function logout()
    {
    	
    	$objetAuthentificationModel = new \W\Security\AuthentificationModel;
    	$objetAuthentificationModel->logUserOut();
    	$this->redirectToRoute('homePage_index');
    	
    }

    /**
     * Methode qui gere les inscriptions d'un bénévole ou d'un sponsor
     * Formulaire d'inscription traité par une methode ajax dans le fichier
     * public/assets/js/ajaxConnection.js
     * @route /inscription
     */
    public function inscription()
    {
    	$WebModel = new WebsiteModel;
    	$web = $WebModel->findAll();
    	// METHODE QUI VA GERER LA ROUTE /signup
    	// CONTROLLER
    	$message = [];
    	$error = 0;
    	
    	// TRAITER LE FORMULAIRE D'INSCRIPTION
    	if (isset($_POST["operation"]) && ($_POST["operation"] == "signup"))
    	{
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$email              = trim($_POST["email"]);
    		$password           = trim($_POST["password"]);
    		$role				= trim($_POST["role"]);
    		$last_name			= trim($_POST["last_name"]);
    		$first_name 		= trim($_POST["first_name"]);
    		$phone				= trim($_POST["phone"]);
    		$password_confirm   = trim($_POST["password_confirm"]);
    		
    		
    		// SECURITE
    		// VERIFIER QUE CHAQUE INFO EST CONFORME
    		// http://php.net/manual/en/function.mb-strlen.php
    		
    		if(!is_string($last_name) || ( mb_strlen($last_name) < 5)){
    			$error++;
    			$message[] = 'Le champ nom invalide';
    		}
    		if(!is_string($first_name) || ( mb_strlen($first_name) < 5)){
    			$error++;
    			$message[] = 'Le champ prenom invalide';
    		}
    		//Numéro de télphone français sous la form 00 00 00 00 00
    		
    		if (preg_match ( "/^[0-9]{10}$/", $phone ) == 0 )
    		{
    			$error++;
    			$message[] = 'Numéros de téléphone invalide';
    		}
    		
    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$message[]='Votre email n\'est pas conforme';
    			$error++;	
    		}
    		if(!is_string($password)  || ( mb_strlen($password) < 5 )){
    			$message[]='Votre mot de passe n\'est pas conforme';
    			$error++;		
    		}
    				
    		if(!is_string($password_confirm)  || ( mb_strlen($password_confirm) < 5 )){
    			$message[]='Votre mot de passe de confirmation n\'est pas conforme'; 
    			$error++;
    		}
    		if($password != $password_confirm)
    		{
    			$message[]= 'Votre mot de passe n\'est pas identique';
    			$error++;
    		}
    				
    		$objetUsersModel = new \W\Model\UsersModel;
    			
    		if ($objetUsersModel->emailExists($email) == true)
    		{
    			$error++;
    			$message[] = "ERREUR: email existe dejà";
    			
    		}
    		
    		if($error == 0){
    			     	$passwordHash   = password_hash($password, PASSWORD_DEFAULT);
    			     	$token_validation = \W\Security\StringUtils::randomString(32);
    			     $lastId =	$objetUsersModel->insert([
    			     			"email"      		=> $email,
    			     			"password"   		=> $passwordHash,
    			     			"role"       		=> $role,
    			     			"last_name"  		=> $last_name,
    			     			"first_name" 		=> $first_name,
    			     			"phone"      		=> $phone,
    			     			"created"    		=> date('Y-m-d h:i:s'),
    			     			"token_validation"	=> $token_validation,
    			     			"status"			=>'En attente',
    			     			"username" 			=> $email
    			     	]);
    			     	
    			     	$objetUsersProfilModel = new \Model\UsersProfilModel;
    			     	$objetUsersProfilModel->insert(['id_users'=>$lastId['id']]);
    			     	
    			     	$message[] ="Un e-mail a ete envoyer pour confirmer votre inscription";
    			     	/*Mail de validation de l'utilisateur */
    			     	$lien = $this->generateUrl("homePage_validationMail");
    			     	$lien .= "?email=".$email."&token=".$token_validation;
    			     	
    			     	$sujet = 'Bienvenue '.$first_name.' '.$last_name;
    			     	$corp = 'Bienvenue '.$first_name.' '.$last_name.' pour valider votre inscription veuillez cliquer sur ce lien <a href='.$lien.'>Valider votre inscription</a>';
    			     	$this->envoyerMail('chrastophe@gmail.com',$email,$sujet,$corp);   			
    		
    		}
    		
    		$msgJson = ['message'=>$message];
    		$this->showJson($msgJson);
    	}
    			     	
    }
    
    /**0
     * 
     * Methode qui permet d'envoyer des msgs par mail
     * 
     * @param string $expediteur adresse email de l'espediteur du msg
     * @param string $destinataire adresse mail du destinataire
     * @param string $sujet Titre du mail
     * @param string $corp Corp du msg en html
     */
    public function envoyerMail($expediteur,$destinataire,$sujet,$corp){
    	
    	$mail = new \PHPMailer();
    	
    	$mail->isSMTP(); //connexion directe au serveur SMTP
    	$mail->isHTML(true); //utilisation du format HTML pour le message

    	$mail->Host = 'smtp.gmail.com';
    	$mail->Port = 465;
    	$mail->SMTPAuth   = true;
    	$mail->SMTPSecure ="ssl";
    	$mail->Username = "";
    	$mail->Password = "";
    	$mail->setFrom($expediteur);
    	$mail->FromName='admin-totem';
    	$mail->addAddress($destinataire);
    	$mail->Subject = $sujet;
    	$mail->Body =$corp;
    	
    	if (!$mail->send()) {
    		echo "Mailer Error: " . $mail->ErrorInfo;
    	} else {
    		echo "Message sent!";
    	}
    }
    
    /**
     * Vérifie si le mail et le token envoyer par mail sont valides
     * si il y est valide on passe le valeur dans la bdd du champ valider à 1
     * On récupère les valeurs passer en GET 
     * @route /validation
     */
    public function validationMail(){
    	
    	$message =[];
    	$safe = array_map('strip_tags',$_GET);
    	$error = 0;
    	
    	$email = trim($safe['email']);
    	$token = trim($safe['token']);
    	
    	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    		$error++;
    	}
    	
    	if($error == 0){
    	
    		$objetUsersModel = new \W\Model\UsersModel;
    		$tokenBdd = $objetUsersModel->search(array('email' =>$email));
			$id = $tokenBdd[0]['id'];
			
    		if($token == $tokenBdd[0]['token_validation']){
    			$message[]= 'token validez';
    			$objetUsersModel->update(['valider'=>1,],$id);
    			
    		}
    	}
    	else{
    		$message[] = 'Erreur';
    		
    	}	
    }
    
    /**
     * Permet à un utilisateur de générer un nouveau mdp.
     * @route /mdp-perdu
     */
    public function mdpPerdu(){
    	
    	$objetUsersModel = new \W\Model\UsersModel;
    	$message =[];
    	$error = 0;
    	$safe = array_map('strip_tags',$_GET);
    	$email = trim($safe['email']);
    	
    	if ($objetUsersModel->emailExists($email) == FALSE){
    		$error++;
    		$message[] = 'Email invalide';
    	}
    	
    	if($error == 0){
    		
	    	$chaine = 'azertyuiopqsdfghjklmwxcvbn123456789';
	    	$nb_lettres = strlen($chaine) - 1;
	    	$generation = '';
	    	
	    	for($i=0; $i < 7; $i++)
	    	{
	    		$pos = mt_rand(0, $nb_lettres);
	    		$car = $chaine[$pos];
	    		$generation .= $car;
	    	}
	    	
	    	$nvxMdp = password_hash($generation, PASSWORD_DEFAULT);
	    	
	    	$utilisateur = $objetUsersModel->search(array('email' =>$email));
	    	$objetUsersModel->update(['password'=>$nvxMdp],$utilisateur[0]['id']);
	    	
	    	$sujet = 'Totem - Nouveau mot de passe';
	    	$corp = 'Bonjour, voici votre nouveau mot de passe: '.$generation.' .Vous pouvez vous connecter avec votre nouveau mot de passe.';
	    	
	    	//envoyerMail($expediteur,$email,$sujet,$corp);
	    	
	    	$message[] = 'Un email a été envoyer avec votre nouveau mot de passe.';
	    	
	    	//redirection vers une page
    	}
    
    }
    

    
}