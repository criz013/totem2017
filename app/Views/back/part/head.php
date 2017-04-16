<?php
/**
 * Fichier html du head du backOffice
 */
?>
<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<title>Back office</title>

		<!-- CSS FILES -->
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/pages/backHome.css') ?>" />
	</head>
	<body>
	<header>
		<nav id="top-infos" role="navigation">
			<div class="navbar-header">
				<span id="back-title">Dashboard</span>
				<span id="back-organisation">CHALLENGE TOTEM</span>
				<ul id="top-indicators">
					<li><i class="fa fa-trophy" aria-hidden="true"></i><span class="badge">2</span></li>
					<li><i class="fa fa-handshake-o" aria-hidden="true"></i><span class="badge">56</span></li>
					<li><i class="fa fa-users" aria-hidden="true"></i><span class="badge">81</span></li>
				</ul>
				<ul id="top-right-infos">
					<li>Bienvenue dynamic User Mail adress</li>
					<li><a href="#"><span class="glyphicon glyphicon-log-out right" aria-hidden="true"></span> Déconnexion</a></li>
				</ul>
		</nav>
	</header>
	<main>
		<div>
			<nav id="nav-sidebar">
				<ul>
					<li><a href="<?php echo $this->url("web_site")?>">Configuration du site</a></li>
					<li><a href="<?php echo $this->url("user_inscription")?>">Inscription partenaire/Bénévole</a></li>
					<li><a href="<?php echo $this->url("challenge_index")?>">Evènement</a></li>
					<li><a href="<?php echo $this->url("press_index")?>">Revue de presse</a></li>
					<li><a href="<?php echo $this->url("web_sociaux")?>">Raiseau sociaux</a></li>
				</ul>
			</nav>
		</div>
		
		