<?php
	
	$w_routes = array(
	    //Route pour la home page
		['GET', '/', 'HomePage#index', 'homePage_index'],

        //route pour la partie administrateur
        ['GET|POST', '/aministrateur', 'Admin#index', 'admin_index'],

        //route pour pour qu'un benevol ou sponsor puissent modifier leurs informations
        ['GET|POST', '/aministrateur/partenaire/[:id]', 'User#partenaire', 'user_partenaire'],

        //Validation des inscriptions
        ['GET|POST', '/aministrateur/gestion-inscription', 'User#inscription', 'user_inscription'],
        ['GET|POST', '/aministrateur/gestion-inscription/detail/[:id]', 'User#inscriptionDetail', 'user_inscription_detail'],

        //Edition et suppression d'article de la revue de presse
        ['GET', '/aministrateur/revue-presse', 'Presse#index', 'presse_index'],
        ['GET', '/aministrateur/revue-presse/detail/[:id]', 'Presse#detail', 'presse_detail'],

        //Gestion des editions challenge totem
        ['GET', '/aministrateur/gestion-edition', 'Challenge#index', 'challenge_index'],
        ['GET', '/aministrateur/gestion-edition/detail/[:id]', 'Challenge#detail', 'challenge_detail'],

        //Gestion du site en général
        ['GET', '/aministrateur/configuration-site', 'Web#site', 'web_site'],
		['GET|POST', '/aministrateur/configuration-site/modification/[:id]', 'Web#modification', 'web_modification'],

        ['GET|POST', '/aministrateur/reseau-sociaux', 'Web#sociaux', 'web_sociaux'],

        //Identification et inscription
        ['GET|POST', '/login', 'HomePage#login', 'homePage_login'],
        ['GET|POST', '/logout', 'HomePage#logout', 'homePage_logout'],
        ['GET|POST', '/inscription', 'HomePage#inscription', 'homePage_inscription'],

	);