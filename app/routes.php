<?php
	
	$w_routes = array(
	    //Route pour la home page
        ['GET', '/', 'HomePage#index', 'homePage_index'],

        //route pour la partie administrateur
        ['GET|POST', '/administrateur', 'Admin#index', 'admin_index'],

        //route pour pour qu'un benevol ou sponsor puissent modifier leurs informations
        ['GET|POST', '/partenaire/[:id]', 'User#partenaire', 'user_partenaire'],
		['GET|POST', '/partenaire/update/[:id]', 'User#updateUser', 'user_updateUser'],

        //Validation des inscriptions
        ['GET|POST', '/administrateur/gestion-inscription', 'User#inscription', 'user_inscription'],
        ['GET|POST', '/administrateur/gestion-inscription/detail/[:id]', 'User#inscriptionDetail', 'user_inscription_detail'],
		['GET|POST', '/administrateur/gestion-inscription/valider/[:id]', 'User#userValider', 'user_userValider'],
		['GET|POST', '/administrateur/gestion-inscription/refuser/[:id]', 'User#userRefuser', 'user_userRefuser'],
		['GET|POST', '/administrateur/gestion-inscription/traitement/[:id]', 'User#userTraitement', 'user_userTraitement'],

        //Edition et suppression d'article de la revue de press
        ['GET|POST', '/administrateur/revue-press', 'Press#index', 'press_index'],
        ['GET|POST', '/administrateur/revue-press/detail/[:id]', 'Press#detail', 'press_detail'],
        ['GET|POST', '/administrateur/revue-press/suppression/[:id]', 'Press#delete', 'press_delete'],
        ['GET|POST', '/administrateur/revue-press/creation/', 'Press#create', 'press_create'],
        ['GET|POST', '/administrateur/revue-press/modification/[:id]', 'Press#modify', 'press_modify'],
		
        //Gestion des editions challenge totem
        ['GET|POST', '/administrateur/challenges', 'Challenge#index', 'challenge_index'],
        ['GET|POST', '/administrateur/challenges/edit/[:id]', 'Challenge#edit', 'challenge_edit'],

        //Gestion du site en général
        ['GET|POST', '/administrateur/configuration-site', 'Web#site', 'web_site'],
		['GET|POST', '/administrateur/configuration-site/modification/[:id]', 'Web#modification', 'web_modification'],

        ['GET|POST', '/administrateur/reseau-sociaux', 'Web#sociaux', 'web_sociaux'],

        //Identification et inscription
        ['GET|POST', '/login', 'HomePage#login', 'homepage_login'],
        ['GET|POST', '/logout', 'HomePage#logout', 'homePage_logout'],
        ['GET|POST', '/inscription', 'HomePage#inscription', 'homePage_inscription'],
		['GET|POST', '/validation', 'HomePage#validationMail', 'homePage_validationMail'],
		['GET|POST', '/mdp-perdu', 'HomePage#mdpPerdu', 'homePage_mdpPerdu'],

	);