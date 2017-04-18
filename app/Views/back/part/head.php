<?php
/**
 * Fichier html du head du backOffice
 */
//$loggedUser = $this->getUser();
?>
<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Back office</title>

		<!-- CSS FILES -->
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    	<link rel="stylesheet" href="<?= $this->assetUrl('css/fonts.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/pages/backHome.css') ?>" />
	</head>
	<body>
	<header>
		<nav id="top-infos" role="navigation">
			<div class="navbar-header">
				<span id="back-title"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</span>
				<span id="back-organisation"><a href="<?php echo $this->url("homePage_index");?>">CHALLENGE TOTEM</a></span>
				<ul id="top-indicators">
					<li><i class="fa fa-trophy" aria-hidden="true"></i><span class="badge">2</span></li>
					<li><i class="fa fa-handshake-o" aria-hidden="true"></i><span class="badge">56</span></li>
					<li><i class="fa fa-users" aria-hidden="true"></i><span class="badge">81</span></li>
				</ul>
				<ul id="top-right-infos">
					<li>Bienvenue <?php echo $log['email']; ?></li>
					<li><a href="<?php echo $this->url("homePage_logout");?>"><span class="glyphicon glyphicon-log-out right" aria-hidden="true"></span> Déconnexion</a></li>
				</ul>
		</nav>
	</header>
	<main>
		<div id="main" class="container">
			<div class="row">
					<nav id="nav-sidebar" class="navbar col-xs-12 col-sm-12 col-md-12 col-lg-12">
						  <div class="container">
						    
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-sidebar-collapse" aria-expanded="false" id="back-hamburger">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						    </div>
						    
						    <div class="row">
						    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="nav-sidebar-collapse">
							      <ul class="nav navbar-nav navbar-scroll">
							        <li><a href="<?php echo $this->url("web_site")?>">Configuration du site</a></li>
									<li><a href="<?php echo $this->url("user_inscription")?>">Inscription partenaire/Bénévole</a></li>
									<li><a href="<?php echo $this->url("challenge_index")?>">Editions</a></li>
									<li><a href="<?php echo $this->url("press_index")?>">Revue de presse</a></li>
									<li><a href="<?php echo $this->url("web_sociaux")?>">Réseaux sociaux</a></li>
							     </ul>
							    </div><!-- /.navbar-collapse -->
							</div>

						  </div><!-- /.container-fluid -->
						</nav>
				
		

		
		