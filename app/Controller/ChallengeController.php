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
    	$log = $this->getUser();
        // on recupre le challenge à editer
        $challengeModel = new ChallengeModel();
        $challenge      = $challengeModel->find($id);

        $this->show('back/challenge/edit',['challenge' => $challenge,'log'=>$log]);
    }
}