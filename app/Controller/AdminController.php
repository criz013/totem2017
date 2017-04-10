<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/04/2017
 * Time: 15:32
 */

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{
    /**
     *
     * route: /aministrateur
     */
    public function index(){
		
    	$this->show('back/backHome');
    }
}