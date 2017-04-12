<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$partnersTab = new \Model\PartnersModel;
		$partenaires = $partnersTab->search(["challenge_id" => 2]);
		
		$this->show('default/home', ["partenaires" => $partenaires]);
	}

}