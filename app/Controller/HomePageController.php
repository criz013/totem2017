<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 15:31
 */

namespace Controller;
use \W\Controller\Controller;


class HomePageController extends Controller
{
    /**
     * @route /
     */
    public function index(){
    	$this->show('front/home');
    }

    /**
     * @route /login
     * Login sur l'email.
     * 
     */
    public function login(){
		
    	$message = [];
    	$error = 0;
    	
    		// RECUPERER LES INFOS
    		$login      = trim($_POST["email"]); // Le login est l email de l'utilisateur
    		$password   = trim($_POST["password"]);
    		
    		// UN PEU DE SECURITE
    		if (!filter_var($login, FILTER_VALIDATE_EMAIL))
    		{
    			$error++;
    			$message[] = 'Login incorect';
    		}
    		
    		if(!is_string($password)  && ( mb_strlen($password) < 5 ))
    		{
    			$error++;
    			$message[] = 'Mot de passe incorrect';
    		}
    		$objetUsersProfilModel = new \Model\Users_profilModel;
    		$bValide = $objetUsersProfilModel->search(['email'=>$login]);
    		
    		if ($bValide['valider'] == '0'){
    			$error++;
    			$message[] = 'Vous n\'avez pas encore valider votre compte' ;
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
    				
    				// ON PEUT FAIRE UNE REDIRECTION VERS UNE PAGE PROTEGEE
    				$this->redirectToRoute('homePage_index');
    				
    				var_dump($message);
    			}
    			else
    			{
    				// KO
    				$message[] = "IDENTIFIANTS INCORRECTS";
    				var_dump($message);
    			}
    			
    		}
    		var_dump($message);
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
     * Methode qui gere les inscriptions d'un bénévole ou d'un sponsor
     * 
     * @route /inscription
     */
    public function inscription()
    {
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
    		$motif ='`^0[1-9][0-9]{8}$`';
    		if (preg_match ( $motif, $phone ) )
    		{
    			$error++;
    			$message[] = 'Numéros de téléphone invalide';
    		}
    		
    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$error++;	
    		}
    		if(!is_string($password)  || ( mb_strlen($password) < 5 )){
    			
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
    			//Une redirection ici aussi
    		}else{
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
    			     	
    			     	$objetUsersProfilModel = new \Model\Users_profilModel;
    			     	$objetUsersProfilModel->insert(['id_users'=>$lastId['id']]);
    			     	
    			     	/*Mail de validation de l'utilisateur */
    		     		$lien = $this->generateUrl("homePage_validationMail");
    			     	$lien .= "?email=".$email."&token=".$token_validation;
    			     	
    			     	$sujet = 'Bienvenue '.$first_name.' '.$last_name;
    			     	$corp = 'Bienvenue '.$first_name.' '.$last_name.' pour valider votre inscription veuillez cliquer sur ce lien <a href='.$lien.'>Valider votre inscription</a>';
    			     	//$this->envoyerMail('chrastophe@gmail.com',$email,$sujet,$corp);
    			     	
    			     	$this->show("front/inscription", [ "message" => $message,'lien'=>$lien ]);
    		}
    		//Ici message d'erreur avec les messages
    	}
    			     	
    }
    
    /**
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
    		print_r($message);
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