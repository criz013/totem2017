<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 15:32
 */

namespace Controller;

use \W\Controller\Controller;
use \Model\ChallengeModel;

class ChallengeController extends Controller
{
    /**
     *
     * route: /administrateur/challenges
     */
    public function index(){
    	$this->allowTo('admin');
    	$log = $this->getUser();
        // on recupere tous les challenges pour les lister
        $challengeModel = new ChallengeModel();
        $challenges     = $challengeModel->findAll();

        $this->show('back/challenge/index',['challenges' => $challenges,'log'=>$log]);
    }

    /**
     *
     * route: /administrateur/challenges/edit
     */
    public function edit($id){
    	$this->allowTo('admin');
    	$log = $this->getUser();
        // on recupre le challenge à editer
        $challengeModel = new ChallengeModel();
        $challenge      = $challengeModel->find($id);
        
        if (!empty($_POST) && isset($_POST))
        {
        	// RECUPERER LES INFOS DU FORMULAIRE
        	// http://php.net/manual/en/function.trim.php
        	$year           = trim($_POST["annee"]);
        	$name           = trim($_POST["name"]);
        	$description    = trim($_POST["description"]);
        	$text           = trim($_POST["text"]);
        	$hashtag        = trim($_POST["hashtag"]);
        	$status         = trim($_POST["status"]);
        	$don            = trim($_POST["don"]);
        	$uriMap         = trim($_POST["uriMap"]);
        	
        	$challengeModel->update([
        			"year"         => $year,
        			"name"         => $name,
        			"description"  => $description,
        			"text"         => $text,
        			'hashtag'      =>$hashtag,
        			'status'       =>$status,
        			'don'          =>$don,
        			'uriMap'       =>$uriMap
        	],$id);
        }

        $this->show('back/challenge/edit',['challenge' => $challenge,'log'=>$log]);
    }
    
    /**
     *
     * route: /administrateur/challenges/news
     */
    public function news(){
    	$this->allowTo('admin');
    	$log = $this->getUser();
    	$challengeModel = new ChallengeModel();
    	if (!empty($_POST) && isset($_POST))
    	{
    		// RECUPERER LES INFOS DU FORMULAIRE
    		// http://php.net/manual/en/function.trim.php
    		$year           = trim($_POST["year"]);
    		$name           = trim($_POST["name"]);
    		$description    = trim($_POST["description"]);
    		$text           = trim($_POST["text"]);
    		$hashtag        = trim($_POST["hashtag"]);
    		$status         = trim($_POST["status"]);
    		$don            = trim($_POST["don"]);
    		$uriMap         = trim($_POST["uriMap"]);
    		 
    		$challengeModel->insert([
    				"year"         => $year,
    				"name"          => $name,
    				"description"         => $description,
    				"text"         => $text,
    				'hashtag'=>$hashtag,
    				'status'=>$status,
    				'don'=>$don,
    				'uriMap'=>$uriMap
    		]);
    	}
    
    	$this->show('back/challenge/new',['log'=>$log]);
    }
}