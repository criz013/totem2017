<?php

namespace Controller;

use \W\Controller\Controller;

class LastEditionController extends Controller
{

	/**
	* Page Partenaires 2016
	*/
	public function partenaires ()
	{
		$this->show('lastEdition/lastEdition-partenaires');
	}
	
	/**
	* Page Photos 2016
	*/
	public function photos ()
	{
		$this->show('lastEdition/lastEdition-photos');
	}

}