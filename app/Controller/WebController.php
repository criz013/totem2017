<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 16:30
 */

namespace Controller;


use W\Controller\Controller;

class WebController extends Controller
{
    /**
     * @route /aministrateur/configuration-site
     */
    public function site(){
    	$log = $this->getUser();
    	$this->show('back/backConfig',['log'=>$log]);
    }
    
    /**
     * @route /aministrateur/configuration-site/modification
     * @param integer $id il renvois l'id de la table website
     */
    public function modification($id){
    	$log = $this->getUser();
    	$message = [];
    	$error = 0;
    	$alertclass="";
    	$icoclass="";
    	
    	if (!empty($_POST) && isset($_POST))
    	{	
    			// RECUPERER LES INFOS DU FORMULAIRE
    			// http://php.net/manual/en/function.trim.php
    			$titre              = trim($_POST["titre"]);
    			$url                = trim($_POST["url"]);
    			$adresse            = trim($_POST["adresse"]);
    			$codePostal         = trim($_POST["codePostal"]);
    			$ville            	= trim($_POST["ville"]);
    			$phone            	= trim($_POST["phone"]);
    			$description        = trim($_POST["description"]);
    			$email              = trim($_POST["email"]);
    			$facebook           = trim($_POST["facebook"]);
    			$twitter            = trim($_POST["twitter"]);
    			$instagram          = trim($_POST["instagram"]);
    			
    			// SECURITE
    			// VERIFIER QUE CHAQUE INFO EST CONFORME
    			// http://php.net/manual/en/function.mb-strlen.php
    			if ((is_string($titre) == FALSE) || ( strlen($titre) == 0))
    			{
    				$error++;
    				$message[] = 'Titre invalide';
    				
    				
    			}
    			if ((is_string($url) == FALSE) || ( strlen($url) == 0 ))
    			{
    				$error++;
    				$message[] = 'Url invalide';
    				
    			}
    			if ((is_string($adresse) == FALSE)  || ( strlen($adresse) == 0 ))
    			{
    				$error++;
    				$message[] = 'Contact invalide';
    				
    			}
    			if ((is_string($codePostal) == FALSE)  ||  strlen($codePostal) != 5 )
    			{
    				$error++;
    				$message[] = 'Code postal invalide';
    			
    			}
    			if ((is_string($ville) == FALSE)  || ( strlen($ville) == 0 ))
    			{
    				$error++;
    				$message[] = 'Nom de ville invalide';
    				 
    			}
    			if ((is_string($description) == FALSE) || ( mb_strlen($description) == 0 ))
    			{
    				$error++;
    				$message[] = 'Description invalide';
    				
    			}
    			if((is_string($email) == FALSE)  || ( strlen($email) == 0))
    			{
    				$error++;
    				$message[] = 'Email invalide';
    				
    			}
    			if((is_string($facebook) == FALSE) || ( strlen($facebook) == 0 ))
    			{
    				$error++;
    				$message[] = 'Facebook invalide';
    				
    			}
    			if((is_string($twitter) == FALSE) ||  ( strlen($twitter) == 0 ))
    			{
    				$error++;
    				$message[] = 'Twitter invalide';
    				
    			}
    			if((is_string($instagram) == FALSE)  ||  (strlen($instagram) == 0)   )
    			{
    				$error++;
    				$message[] = 'Instagram invalide';
    			}
    					
    			
    			if($error < 1)
    			{
    				
    				if(isset($_FILES['insert_img']) AND $_FILES['insert_img']['error'] == 0){
    					print_r('ici');
    					$img =$_FILES['insert_img']['name'];
    				
    					$extimg=new \SplFileInfo($img);
    					$extimgMin=strtolower($extimg->getExtension());
    				
    					if(!in_array($extimgMin, ['png','jpeg','jpg'])){
    						$error++;
    						$message[]="L'extension de votre image n'est pas reconnue. $extimgMin";
    				
    					}//fin de verif extCv
    				
    					if($_FILES['insert_img']["size"]>2000000){
    						$error++;
    						$message[]="La taille de votre image est supérieur à 2 MO !";
    					}
    					//$filename="press-".$id.".png";
    					$dir=\realpath(__DIR__.'/../../public/assets/img/');
    					//$avatar=$_FILES['img_test']['name']; //le nom d'origine sur mon pc
    				
    				
    					$imgTemp=$_FILES['insert_img']['tmp_name']; //le nom temporaire
    					$avatar=$_FILES['insert_img']['name']; //le nom d'origine sur mon pc
    					//copie du fichier
    					move_uploaded_file($imgTemp,$dir.'/'.$avatar);
    				// ENREGISTRER LA LIGNE DANS LA TABLE MYSQL article
    				// JE CREE UN OBJET DE LA CLASSE ArticleModel
    				// NE PAS OUBLIER DE FAIRE use
    				$objetArticleModel = new \Model\WebsiteModel;
    				// JE PEUX UTILISER LA METHODE update DE LA CLASSE \W\Model\Model
    				$objetArticleModel->update([
    						"titre"         => $titre,
    						"url"           => $url,
    						"adresse"       => $adresse,
    						'codePostal'	=> $codePostal,
    						'ville'			=> $ville,
    						'phone'			=> $phone,
    						"logo"          => $img,
    						"description"   => $description,
    						"email"         => $email,
    						"facebook"      => $facebook,
    						"twitter"       => $twitter,
    						"instansgram"   => $instagram,
    				],$id);
    				
    				// OK
    				$message[] = "BRAVO TU AS MODIFIE Les parametres du site";
    				$alertclass="success";
    				$icoclass="thumbs-up";
    				}else{
    					print_r('ici2');
    					// ENREGISTRER LA LIGNE DANS LA TABLE MYSQL article
    					// JE CREE UN OBJET DE LA CLASSE ArticleModel
    					// NE PAS OUBLIER DE FAIRE use
    					$objetArticleModel = new \Model\WebsiteModel;
    					// JE PEUX UTILISER LA METHODE update DE LA CLASSE \W\Model\Model
    					$objetArticleModel->update([
    							"titre"         => $titre,
    							"url"           => $url,
    							"adresse"       => $adresse,
    							'codePostal'	=> $codePostal,
    							'ville'			=> $ville,
    							'phone'			=> $phone,
    							"description"   => $description,
    							"email"         => $email,
    							"facebook"      => $facebook,
    							"twitter"       => $twitter,
    							"instansgram"   => $instagram,
    					],$id);
    					
    					// OK
    					$message[] = "BRAVO TU AS MODIFIE Les parametres du site";
    					$alertclass="success";
    					$icoclass="thumbs-up";
    					
    				}
    				
    			}else{
    			
    			$alertclass="danger";
    			$icoclass="thumbs-down";
    		}
    	} 
 		
    	$this->show('back/backConfigModif',['id'=>$id,'message'=>$message, 'alertclass'=>$alertclass, 'icoclass'=>$icoclass,'log'=>$log]);
    }
    
}