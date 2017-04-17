<?php
	
	$w_routes = array(
	    //Route pour la home page
        ['GET', '/', 'HomePage#index', 'homePage_index'],

        //route pour la partie administrateur
        ['GET|POST', '/administrateur', 'Admin#index', 'admin_index'],

        //route pour pour qu'un benevol ou sponsor puissent modifier leurs informations
        ['GET|POST', '/administrateur/partenaire/[:id]', 'User#partenaire', 'user_partenaire'],

        //Validation des inscriptions
        ['GET|POST', '/administrateur/gestion-inscription', 'User#inscription', 'user_inscription'],
        ['GET|POST', '/administrateur/gestion-inscription/detail/[:id]', 'User#inscriptionDetail', 'user_inscription_detail'],

        //Edition et suppression d'article de la revue de press
        ['GET', '/administrateur/revue-press', 'Press#index', 'press_index'],
        ['GET', '/administrateur/revue-press/detail/[:id]', 'Press#detail', 'press_detail'],
        ['GET|POST', '/administrateur/revue-press/suppression/[:id]', 'Press#delete', 'press_delete'],
        ['GET|POST', '/administrateur/revue-press/creation/', 'Press#create', 'press_create'],
        ['GET|POST', '/administrateur/revue-press/modification/[:id]', 'Press#modify', 'press_modify'],

        //Gestion des editions challenge totem
        ['GET', '/administrateur/gestion-edition', 'Challenge#index', 'challenge_index'],
        ['GET', '/administrateur/gestion-edition/detail/[:id]', 'Challenge#detail', 'challenge_detail'],

        //Gestion du site en général
        ['GET', '/administrateur/configuration-site', 'Web#site', 'web_site'],
		['GET|POST', '/administrateur/configuration-site/modification/[:id]', 'Web#modification', 'web_modification'],

        ['GET|POST', '/administrateur/reseau-sociaux', 'Web#sociaux', 'web_sociaux'],

        //Identification et inscription
        ['GET|POST', '/login', 'HomePage#login', 'homepage_login'],
        ['GET|POST', '/logout', 'HomePage#logout', 'homePage_logout'],
        ['GET|POST', '/inscription', 'HomePage#inscription', 'homePage_inscription'],
		['GET|POST', '/validation', 'HomePage#validationMail', 'homePage_validationMail'],
		['GET|POST', '/mdp-perdu', 'HomePage#mdpPerdu', 'homePage_mdpPerdu'],

	);