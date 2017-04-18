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
        $this->show("back/backArticle");
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
    	if (!empty($_POST) && isset($_POST))
    	{
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$titre           = trim($_POST["titre"]);
    		$lien             = trim($_POST["lien"]);
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
    					"dateCreate"	=> date('Y-m-d h:i:s')
    			]);
    	
    			// OK
    			$message[] = "BRAVO L'ARTICLE A ÉTÉ CRÉÉ.";
    		}
    	}
    	
    	$this->show("back/backNewArticle",['message'=>$message]);
    }

    //fonction pour gérer modification(s) d'un article 
    public function modify($id){
    	$log = $this->getUser();
        $message = [];
        $error = 0;
        
        if (!empty($_POST) && isset($_POST))
        {   
                // RECUPERER LES INFOS DU FORMULAIRE
                // http://php.net/manual/en/function.trim.php
                $titre           = trim($_POST["titre"]);
                $lien             = trim($_POST["lien"]);
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
                    // ENREGISTRER LA LIGNE DANS LA TABLE MYSQL article
                    // JE CREE UN OBJET DE LA CLASSE ArticleModel
                    // NE PAS OUBLIER DE FAIRE use
                    $objetArticleModel = new \Model\revue_pressModel;
                    // JE PEUX UTILISER LA METHODE update DE LA CLASSE \W\Model\Model
                    $objetArticleModel->update([
                            "titre"         => $titre,
                            "lien"           => $lien,
                            "chapo"         => $chapo,
                            "corp"          => $corp,
                    ],$id);
                    
                    // OK
                    $message[] = "BRAVO L'ARTICLE A ÉTÉ MODIFIÉ.";
                }
            }
        
        $this->show('back/backArticleModify',['id'=>$id,'message'=>$message,'log'=>$log]);
    }  

    //fonction pour gérer suppression d'un article 
    public function delete($id){
    	$objetArticleModel = new \Model\revue_pressModel;
    	 $objetArticleModel-> delete($id);
    	 $this->show("back/backArticle");
    }
}