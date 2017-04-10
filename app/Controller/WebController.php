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
    	$this->show('back/backConfig');
    }
    
    /**
     * @route /aministrateur/configuration-site/modification
     * @param integer $id il renvois l'id de la table website
     */
    public function modification($id){
    	
    	$message = [];
    	$error = 0;
    	
    	if (!empty($_POST))
    	{	
    			// RECUPERER LES INFOS DU FORMULAIRE
    			// http://php.net/manual/en/function.trim.php
    			$titre              = trim($_POST["titre"]);
    			$url                = trim($_POST["url"]);
    			$contact            = trim($_POST["contact"]);
    			//$logo               = trim($_POST["logo"]);
    			$description        = trim($_POST["description"]);
    			$email              = trim($_POST["email"]);
    			$facebook           = trim($_POST["facebook"]);
    			$twitter            = trim($_POST["twitter"]);
    			$instagram         = trim($_POST["instagram"]);
    			
    			// SECURITE
    			// VERIFIER QUE CHAQUE INFO EST CONFORME
    			// http://php.net/manual/en/function.mb-strlen.php
    			if (is_string($titre) && ( strlen($titre) <= 0))
    			{
    				$error++;
    				$message[] = 'Titre invalide';
    				
    				
    			}
    			if (is_string($url)    && ( strlen($url) <= 1 ))
    			{
    				$error++;
    				$message[] = 'Url invalide';
    				
    			}
    			if (is_string($contact)  && ( strlen($contact) <= 0 ))
    			{
    				$error++;
    				$message[] = 'Contact invalide';
    				
    			}
    			if (is_string($description) && ( mb_strlen($description) <= 0 ))
    			{
    				$error++;
    				$message[] = 'Description invalide';
    				
    			}
    			if(is_string($email)  && ( strlen($email) <= 0))
    			{
    				$error++;
    				$message[] = 'Email invalide';
    				
    			}
    			if(is_string($facebook)      && ( strlen($facebook) <= 0 ))
    			{
    				$error++;
    				$message[] = 'Facebook invalide';
    				
    			}
    			if(is_string($twitter) ||  ( strlen($twitter) <= 0 ))
    			{
    				$error++;
    				$message[] = 'Twitter invalide';
    				
    			}
    			if(is_string($instagram)  ||  strlen($instagram) <= 0   )
    			{
    				$error++;
    				$message[] = 'Instagram invalide';
    			}
    					
    			if($error > 0)
    			{
    				
    			}else{
    				// ENREGISTRER LA LIGNE DANS LA TABLE MYSQL article
    				// JE CREE UN OBJET DE LA CLASSE ArticleModel
    				// NE PAS OUBLIER DE FAIRE use
    				$objetArticleModel = new \Model\WebsiteModel;
    				// JE PEUX UTILISER LA METHODE update DE LA CLASSE \W\Model\Model
    				$objetArticleModel->update([
    						"titre"         => $titre,
    						"url"           => $url,
    						"contact"       => $contact,
    						"logo"          => 'logo1',
    						"description"   => $description,
    						"email"         => $email,
    						"facebook"      => $facebook,
    						"twitter"       => $twitter,
    						"instansgram"   => $instagram,
    				],$id);
    				
    				// OK
    				$message[] = "BRAVO TU AS MODIFIE UN ARTICLE";
    		}
    	}
 		print_r($error);
    	$this->show('back/backConfigModif',['id'=>$id,'message'=>$message]);
    }
    
}