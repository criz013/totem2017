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

        // on recupere tous les challenges pour les lister
        $challengeModel = new ChallengeModel();
        $challenges =	$challengeModel->findAll();

        $this->show('back/challenge/index',['challenges' => $challenges]);
    }

    /**
     *
     * route: /administrateur/challenges/edit
     */
    public function edit(){

        // on recupere tous les challenges pour les lister
        $challengeModel = new ChallengeModel();
        $challenges =	$challengeModel->findAll();

        $this->show('back/challenge/index',['challenges' => $challenges]);
    }
}