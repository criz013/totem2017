<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 16:30
 */

namespace Controller;

use \W\Controller\Controller;

class PressController extends Controller
{
    /**
     * @route /aministrateur/revue-presse
     */
    public function index(){
    	$log = $this->getUser();
    	$this->show("back/backArticle",['log'=>$log]);
    }

    /**
     * @param $id integer Id d'un article
     * @route /aministrateur/revue-presse/detail/[:id]
     */

    //fonctions pour gérer affichage d'un article particulier
    public function detail($id){
    	$log = $this->getUser();
    } 
    //fonction pour gérer création d'un article 
    public function create(){
    	$log = $this->getUser();
    	$error = 0;
    	$message=[];
    	$alertclass="";
    	$icoclass="";
    	
    	if (!empty($_POST) && isset($_POST))
    	{
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$titre           = trim($_POST["titre"]);
    		$lien            = trim($_POST["lien"]);
    		$chapo           = trim($_POST["chapo"]);
    		$corp            = trim($_POST["corp"]);
    		//$img			 = trim($_POST["img"]);
    	\var_dump($_POST);
    	
    		// SECURITE
    		// VERIFIER QUE CHAQUE INFO EST CONFORME
    		// http://php.net/manual/en/function.mb-strlen.php
    		if ((is_string($titre) == FALSE) || ( strlen($titre) == 0))
    		{
    			$error++;
    			$message[] = 'Titre invalide';
    	
    	
    		}
    		if ((is_string($lien) == FALSE) || ( strlen($lien) == 0 ))
    		{
    			$error++;
    			$message[] = 'Url invalide';
    	
    		}
    		if ((is_string($chapo == FALSE))  || ( strlen($chapo) == 0 ))
    		{
    			$error++;
    			$message[] = 'Chapo invalide';
    	
    		}
    		if ((is_string($corp) == FALSE) || ( mb_strlen($corp) == 0 ))
    		{
    			$error++;
    			$message[] = 'Corps invalide';
    	
    		}
    		$img = $_FILES['img']['name'];
    		$extimg=new \SplFileInfo($img);
    		$extimgMin=strtolower($extimg->getExtension());
    		
    		if(!in_array($extimgMin, ['png','jpeg','jpg'])){
    			$error++;
    			$message="L'extension de votre image n'est pas reconnue. $extimgMin";
    			
    		}//fin de verif extCv
    		
    		if($_FILES['img']["size"]>2000000){
    			$error++;
    			$message="La taille de votre image est supérieur à 2 MO !";
    		}
    	
    		if($error < 1)
    		{
    			//$filename="press-".$id.".png";
    		$dir=\realpath(__DIR__.'/../../public/assets/img/');
    		//$avatar=$_FILES['img_test']['name']; //le nom d'origine sur mon pc
    		
    		
    		$imgTemp=$_FILES['img']['tmp_name']; //le nom temporaire
    		$avatar=$_FILES['img']['name']; //le nom d'origine sur mon pc

    		//copie du fichier
    		move_uploaded_file($imgTemp,$dir.'/'.$avatar);
    			// ENREGISTRER LA LIGNE DANS LA TABLE MYSQL article
    			// JE CREE UN OBJET DE LA CLASSE ArticleModel
    			// NE PAS OUBLIER DE FAIRE use
    			$objetArticleModel = new \Model\revue_pressModel;
    			// JE PEUX UTILISER LA METHODE update DE LA CLASSE \W\Model\Model
    			$objetArticleModel->insert([
    					"titre"         => $titre,
    					"lien"          => $lien,
    					"chapo"         => $chapo,
    					"corp"          => $corp,
    					'photo'			=> $img,
    					"dateCreate"	=> date('Y-m-d h:i:s')
    			]);
    	
    			// OK
    			$message[] = "BRAVO L'ARTICLE A ÉTÉ CRÉÉ.";
    		}else{
    			$alertclass="danger";
    			$icoclass="thumbs-down";
    		}
    	}
    	
    	$this->show("back/backNewArticle",['message'=>$message, 'alertclass'=>$alertclass, 'icoclass'=>$icoclass,'log'=>$log]);
    }

    //fonction pour gérer modification(s) d'un article 
    public function modify($id){
    	$log = $this->getUser();
        $message = [];
        $error = 0;
        $alertclass='';
        $icoclass='';
        
        if (!empty($_POST) && isset($_POST))
        {   
                // RECUPERER LES INFOS DU FORMULAIRE
                // http://php.net/manual/en/function.trim.php
                $titre           = trim($_POST["titre"]);
                $lien            = trim($_POST["lien"]);
                $chapo           = trim($_POST["chapo"]);
                $corp            = trim($_POST["corp"]);
                
                
                // SECURITE
                // VERIFIER QUE CHAQUE INFO EST CONFORME
                // http://php.net/manual/en/function.mb-strlen.php
                if ((is_string($titre) == FALSE) || ( strlen($titre) == 0))
                {
                    $error++;
                    $message[] = 'Titre invalide';
                    
                    
                }
                if ((is_string($lien) == FALSE) || ( strlen($lien) == 0 ))
                {
                    $error++;
                    $message[] = 'Url invalide';
                    
                }
                if ((is_string($chapo == FALSE))  || ( strlen($chapo) == 0 ))
                {
                    $error++;
                    $message[] = 'Chapo invalide';
                    
                }
                if ((is_string($corp) == FALSE) || ( mb_strlen($corp) == 0 ))
                {
                    $error++;
                    $message[] = 'Corps invalide';
                    
                }
                                        
                if($error < 1)
                {
                	if(!empty($_FILES['insert_img'])){
                		$img = $cv=$_FILES['insert_img']['name'];
                	}
                    // ENREGISTRER LA LIGNE DANS LA TABLE MYSQL article
                    // JE CREE UN OBJET DE LA CLASSE ArticleModel
                    // NE PAS OUBLIER DE FAIRE use
                    $objetArticleModel = new \Model\revue_pressModel;
                    // JE PEUX UTILISER LA METHODE update DE LA CLASSE \W\Model\Model
                    $objetArticleModel->update([
                            "titre"         => $titre,
                            "lien"          => $lien,
                            "chapo"         => $chapo,
                            "corp"          => $corp,
                    		"photo"         => $img,
                    ],$id);
                    
                    // OK
                    $message[] = "BRAVO L'ARTICLE A ÉTÉ MODIFIÉ.";
                    $alertclass="success";
                    $icoclass="thumbs-up";
                }else{
                	$alertclass="danger";
                	$icoclass="thumbs-down";
                }
            }
        
        $this->show('back/backArticleModify',['id'=>$id,'message'=>$message, 'alertclass'=>$alertclass, 'icoclass'=>$icoclass,'log'=>$log]);
    }  

    //fonction pour gérer suppression d'un article 
    public function delete($id){
    	$objetArticleModel = new \Model\revue_pressModel;
    	 $objetArticleModel-> delete($id);
    	 $this->show("back/backArticle");
    }
}