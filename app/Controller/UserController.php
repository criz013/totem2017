<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 16:29
 */

namespace Controller;
use \W\Controller\Controller;
use \Abraham\TwitterOAuth\TwitterOAuth;

class UserController extends Controller
{
	protected $expediteur = '';

    public function updateSocials($sponsors){
         //Param API Twiter
    $consumer_key='wGZe3qrmv2keBlz6JyQOSUGDP'; //Provide your application consumer key
    $consumer_secret='pikj9SJ2mmjpY8mXevBL6geXwCiPSUq1NPcWhxvk5Q5XuiRMyI'; //Provide your application consumer secret
    $oauth_token = '854619489908011009-jLjZ5WAdAywARYqEUOOdi8fxtzl2TII'; //Provide your oAuth Token
    $oauth_token_secret = 'LcicAxZFjDx9RIUqH93bmnGzU8vYBtr0fktFaKngaKuFs'; //Provide your oAuth Token Secret

    /* Create a TwitterOauth object with consumer/user tokens. */
    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

    //4 - Start Querying
     
    var_dump($sponsors);
    $objetUsersModel = new \W\Model\UsersModel;
    $objetUsersProfilModel = new \Model\Users_profilModel;
    
    foreach($sponsors as $team){
        $id=$team["id"];
        $haschtag=$team["haschtag"];
        $idusers=$team["id_users"];
        $tweets = $connection->get("search/tweets", ["q" => $haschtag]);
        $cpttwitter = sizeof($tweets)+1;
        
        $objetUsersProfilModel->update(['cpt-twitter'=>$cpttwitter],$id);
        
    }
    $this->show('front/partenaire',['id'=>$id,'log'=>$log,'web'=>$web]);
}
     /**
     * Renvois vers la fiche récapitulatif de l'utilisateur
     * @route /partenaire/[:id]
     *@param interger $id id de l'user
     */
    public function partenaire($id){
    	$log = $this->getUser();
    	$WebModel = new \Model\WebsiteModel;
    	$web = $WebModel->findAll();
    	$this->show('front/partenaire',['id'=>$id,'log'=>$log,'web'=>$web]);
    }
    
    /**
     * @route /partenaire/update/[:id]
     * @param integer $id l'id de l utilisateur
     */
    public function updateUser($id){
    	$WebModel = new \Model\WebsiteModel;
    	$web = $WebModel->findAll();
    	$alertclass="";
    	$icoclass="";
    	$message = [];
    	$error = 0;
    	
    	if (!empty($_POST) && isset($_POST))
    	{
            //securisation des données recues
            $safe=array_map('strip_tags', $_POST);
           
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$last_name           	= trim($safe["last_name"]);
    		$first_name             = trim($safe["first_name"]);
    		$phone           		= trim($safe["phone"]);
    		$email            		= trim($safe["email"]);
    		
    		//$password           	= trim($_safe["password"]);
            //test si avatar ou logo sont défini dans le POST
    		//if(isset($safe["name_compagny"])){
    		$name_compagny          = trim($safe["name_compagny"]);
    		$link            		= trim($safe["link"]);
    		$description            = trim($safe["description"]);
    		$haschtag               = trim($safe["haschtag"]);

    		if(isset($safe["logo"])){
                $logo = trim($safe["logo"]);
            }
    		if(isset($safe["avatar"])){
                $avatar = trim($safe["avatar"]);
            }
			// }else{
			// 	$name_compagny          = '';
			// 	$link            		= '';
			// 	$description            = '';
			// 	$haschtage              = '';
			// 	$avatar 				= '';
			// 	$logo            		= '';
			// }
			
    		if(!is_string($last_name) || ( mb_strlen($last_name) < 5)){
    			$error++;
    			$message[] = 'Le champ nom invalide';
    		}
    		
    		if(!is_string($first_name) || ( mb_strlen($first_name) < 5)){
    			$error++;
    			$message[] = 'Le champ prenom invalide';
    		}

    		$motif ='`^0[1-9][0-9]{10}$`';
    		if (preg_match ( $motif, $phone ) )
    		{
    			$error++;
    			$message[] = 'Numéro de téléphone invalide';
    		}
    		
    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$message[] = 'E-mail invalide';
    			$error++;
    		}
    		

    		if($error == 0)
            {
    		/**
             * Debut de l upload
             *on crée un fichier à partir de la base encodée 64 
             **/
    		 
                $filename="logoavatar-id-".$id.".png";
                $dir=\realpath(__DIR__.'/../../public/assets/img/logoavatar/');
    	       
                if(isset($avatar))
                {
                	file_put_contents($dir.$filename, base64_decode($avatar));
                	$avatar=$filename;
                }

                if(isset($logo))
                {
                    file_put_contents($dir.'/'.$filename, base64_decode($logo));
                    $logo=$filename;
                }
                
             /*   $avatar=$_FILES['img_test']['name']; //le nom d'origine sur mon pc
                $extAvatar=new \SplFileInfo($avatar);
                $extAvatarMin=strtolower($extAvatar->getExtension());
                
                if(!in_array($extAvatarMin, ['png','jpeg','jpg'])){
                	
                	$message="L'extension de votre avatar n'est pas reconnue. $extAvatarMin";
                	
                }//fin de verif extCv
                                  	
                		if($_FILES['img_test']["size"]>2000000){
                			$message="La taille de votre avatar est supérieur à 2 MO !";
                		}*/
                		
                		//$avatarTemp=$_FILES['img_test']['tmp_name']; //le nom temporaire
                		//$avatar=$_FILES['img_test']['name']; //le nom d'origine sur mon pc
                		//\var_dump($avatar);
                		//\var_dump($dir);
                		//copie du fichier
                		//move_uploaded_file($avatarTemp,$dir.'/'.$avatar);
             
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
			   //if(isset($safe["name_compagny"])){
                if(isset($avatar)){
	                $objetUsersProfilModel->update(['avatar'=>$avatar],$x[0]['id']);
                }

                if(isset($logo)){
                    $objetUsersProfilModel->update(['logo'=>$logo],$x[0]['id']);
                }
    			   //}else{
    			$objetUsersProfilModel->update(['name_compagny'=>$name_compagny,
    			   			'description'=>$description,
    			   			//'logo'=>$logo,
    			   			'link'=>$link,
    			   			'haschtag'=>$haschtag,
    			   			//'avatar'=>$avatar
                            ],$x[0]['id']);
    			   //}
    			     
                $message[] = "BRAVO vous avez modifier vos données personnelles";
                $alertclass="success";
                $icoclass="thumbs-up";
    		}
    	}
        else
        {
            $message[] = "Vous devez remplir le formulaire";
            $alertclass="danger";
            $icoclass="thumbs-down";
        }
    	
    	$this->show('front/partenaire',['id'=>$id,'message'=>$message, 'alertclass'=>$alertclass, 'icoclass'=>$icoclass,'web'=>$web]);
    	
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
    	$log = $this->getUser();
    	$objetUsersModel = new \W\Model\UsersModel;
    	
    	$objetUsersModel->update(['status'=>'valider'],$id);
    	$users =	$objetUsersModel->findAll();
    	//Envoie dumail
    	$usersMail = $objetUsersModel->find($id);
    	$destinataire = $usersMail['email'];
    	$expediteur= 'chrastophe@gmail.com';
    	$sujet="Inscription au challenge totem";
    	$corp="Votre Inscription est validé Félicitation et bienvenue";
    	$this->envoyerMail($expediteur,$destinataire,$sujet,$corp);
    	$this->show('back/gestionIncription',['users' => $users,'log'=>$log]);
    }
    
    /**
     * @route /administrateur/gestion-inscription/refuser/[:id]
     * @param integer $id l'id de l utilisateur
     */
    public function userRefuser($id){
    	$log = $this->getUser();
    	$objetUsersModel = new \W\Model\UsersModel;
    	$objetUsersModel->update(['status'=>'refuser'],$id);
    	$users =	$objetUsersModel->findAll();
    	//Envoie dumail
    	$usersMail = $objetUsersModel->find($id);
    	$destinataire = $usersMail['email'];
    	$expediteur= 'chrastophe@gmail.com';
    	$sujet="Inscription au challenge totem";
    	$corp="Votre Inscription est refusé désoler";
    	$this->envoyerMail($expediteur,$destinataire,$sujet,$corp);
    	$this->show('back/gestionIncription',['users' => $users,'log'=>$log]);
    }
    
    /**
     * @route /administrateur/gestion-inscription/traitement/[:id]
     * @param integer $id l'id de l utilisateur
     */
    public function userTraitement($id){
    	$log = $this->getUser();
    	$objetUsersModel = new \W\Model\UsersModel;
    	$objetUsersModel->update(['status'=>'Cour'],$id);
    	$users =	$objetUsersModel->findAll();
    	//Envoie dumail
    	$usersMail = $objetUsersModel->find($id);
    	$destinataire = $usersMail['email'];
    	$expediteur= 'chrastophe@gmail.com';
    	$sujet="Inscription au challenge totem";
    	$corp="Votre Inscription est refusé désoler";
    	$this->envoyerMail($expediteur,$destinataire,$sujet,$corp);
    	$this->show('back/gestionIncription',['users' => $users,'log'=>$log]);
    	
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
    

}