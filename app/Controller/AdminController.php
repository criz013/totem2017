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
     * route: /administrateur
     */
    public function index(){
    	$log = $this->getUser();
    	$WebModel = new WebsiteModel;
    	$web = $WebModel->findAll();
    	$this->show('back/backHome',['log'=>$log,'web'=>$web]);
    }
}