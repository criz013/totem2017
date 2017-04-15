<?php
/**
 * Le part de l'accueil du back office seul l'administrateur et le super administrateur y ont accé
 */
?>
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
			<nav>
				<ul>
					<li><a href="<?php echo $this->url("web_site")?>">Configuration du site</a></li>
					<li><a href="<?php echo $this->url("user_inscription")?>">Inscription partenaire/Bénévole</a></li>
					<li><a href="<?php echo $this->url("challenge_index")?>">Evènement</a></li>
					<li><a href="<?php echo $this->url("press_index")?>">Revue de presse</a></li>
					<li><a href="<?php echo $this->url("web_sociaux")?>">Raiseau sociaux</a></li>
				</ul>
			</nav>
		</div>
	
	
		