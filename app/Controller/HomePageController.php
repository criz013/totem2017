<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 15:31
 */

namespace Controller;
//A tester
// use '../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

class HomePageController
{
    /**
     * @route /
     */
    public function index(){

    }

    /**
     * @route /login
     * Login sur l'email.
     * Rajoutet un input avec le name operation en hidden
     */
    public function login(){
		
    	$message = [];
    	$error = 0;
    	
    	if(isset($_REQUEST['operation']) && $_REQUEST['operation'] == "login" ){
    		
    		// RECUPERER LES INFOS
    		$login      = trim($_REQUEST["login"]); // Le login est l email de l'utilisateur
    		$password   = trim($_REQUEST["password"]);
    		
    		// UN PEU DE SECURITE
    		if (filter_var($login, FILTER_VALIDATE_EMAIL))
    		{
    			$error++;
    			$message[] = 'Login incorect';
    		}
    		
    		if(is_string($password)  && ( mb_strlen($password) > 4 ))
    		{
    			$error++;
    			$message[] = 'Mot de passe incorrect';
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
    				// OK
    				$message[] = "BIENVENUE $idUser";
    				
    				$objetUsersModel = new \W\Model\UsersModel;
    				// ON RECUPERE TOUTE LA LIGNE SUR L'UTILISATEUR
    				$tabUser = $objetUsersModel->find($idUser);
    				// JE VAIS MEMORISER CES INFOS DANS UNE SESSION
    				$objetAuthentificationModel->logUserIn($tabUser);
    				
    				// ON PEUT FAIRE UNE REDIRECTION VERS UNE PAGE PROTEGEE
    			}
    			else
    			{
    				// KO
    				$message[] = "IDENTIFIANTS INCORRECTS";
    			}
    		}
    	}
    }

    /**
     * @route /logout
     */
    public function logout()
    {
    	
    	$objetAuthentificationModel = new \W\Security\AuthentificationModel;
    	$objetAuthentificationModel->logUserOut();
    	
    	// REDIRIGER VERS LA PAGE D'index
    }

    /**
     * @route /inscription
     */
    public function inscription()
    {
    	// METHODE QUI VA GERER LA ROUTE /users/signup
    	// CONTROLLER
    	$message = [];
    	$error = 0;
    	
    	// TRAITER LE FORMULAIRE D'INSCRIPTION
    	if (isset($_POST["operation"]) && ($_POST["operation"] == "signup"))
    	{
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$username           = trim($_POST["username"]);
    		$email              = trim($_POST["email"]);
    		$password           = trim($_POST["password"]);
    		$role				= trim($_POST["role"]);
    		$last_name			= trim($_POST["last_name"]);
    		$first_name 		= trim($_POST["first_name"]);
    		$phone				= trim($_POST["phone"]);
    		
    		//$status
    		
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
    		
    		if (!is_string($username) || ( mb_strlen($username) < 5) ){
    			$error++;
    		}
    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$error++;	
    		}
    		if(!is_string($password)  || ( mb_strlen($password) < 5 )){
    			$error++;		
    		}
    				
    		$objetUsersModel = new \W\Model\UsersModel;
    			
    		if ($objetUsersModel->emailExists($email))
    		{
    			$error++;
    			$message[] = "ERREUR: email existe dejà";
    		}
    		if ($objetUsersModel->usernameExists($username))
    		{
    			$error++;
    			$message[] = "ERREUR: username existe dejà";	
    		}
    			
    			     if($error == 0)
    			     {
    			     	$passwordHash   = password_hash($password, PASSWORD_DEFAULT);
    			     	$token_validation = \W\Security\StringUtils::randomString(32);
    			     	$objetUsersModel->insert([
    			     			"username"  =>   $username,
    			     			"email"     =>   $email,
    			     			"password"  =>   $passwordHash,
    			     			"role"      =>   $role,
    			     			"last_name" =>  $last_name,
    			     			"first_name" => $first_name,
    			     			"phone" => $phone,
    			     			"role" => $role,
    			     			"created" => "DATENOW()",
    			     			"token_validation"=> $token_validation
    			     	]);
    			     	//Mail de validation de l'utilisateur
    			     	$lien = $this->url("homePage_validationMail",['email'=>$email,'token_validation'=>$token_validation]);
    			     	$sujet = "Bienvenue $last_name $first_name, veuillez valider votre compte pour continuer avec ce lien: $lien .";
    			     	envoyerMail('chrastophe@gmail.com', $email,$sujet);
    			     	$message[] = "BIENVENUE $username (IL FAUT CONFIRMER L'INSCRIPTION PAR MAIL)";
    			     }
    		
    	}
    	// VIEW
    	$this->show("page/users-signup", [ "message" => $message ]);
    }
    
    public function envoyerMail($expediteur,$destinataire,$sujet){
    	//Create a new PHPMailer instance
    	$mail = new PHPMailer;
    	// Set PHPMailer to use the sendmail transport
    	$mail->isSendmail();
    	//Set who the message is to be sent from
    	$mail->setFrom($expediteur);
    	//Set who the message is to be sent to
    	$mail->addAddress($destinataire);
    	//Set the subject line
    	$mail->Subject = 'Mail de validation d\'inscription';
    	//Read an HTML message body from an external file, convert referenced images to embedded,
    	//convert HTML into a basic plain-text alternative body
    	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
    	//Replace the plain text body with one created manually
    	$mail->AltBody = $sujet;
    	
    	//send the message, check for errors
    	if (!$mail->send()) {
    		echo "Mailer Error: " . $mail->ErrorInfo;
    	} else {
    		echo "Message sent!";
    	}
    }
    public function validationMail(){
    	$safe = array_map('strip_tags',$_GET);
    	
    	$objetUsersModel = new \W\Model\UsersModel;
    	
    	$tokenBdd = $objetUsersModel->search(array($safe['email'],'or',FALSE));
    	
    	if($tokenBdd['']){
    		
    	}
    	
    }
}