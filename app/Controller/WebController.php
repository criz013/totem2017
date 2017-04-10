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
}