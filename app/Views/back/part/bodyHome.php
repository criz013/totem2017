<?php
/**
 * Le part de l'accueil du back office seul l'administrateur et le super administrateur y ont accé
 */
?>
<main>
	<header>
		<h1>Page d'accueil du back office</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="<?php echo $this->url("web_site")?>">Configuration du site</a></li>
			<li><a href="<?php echo $this->url("user_inscription")?>">Inscription partenaire/Bénévole</a></li>
			<li><a href="<?php echo $this->url("challenge_index")?>">Evènement</a></li>
			<li><a href="<?php echo $this->url("press_index")?>">Revue de presse</a></li>
			<li><a href="<?php echo $this->url("web_sociaux")?>">Raiseau sociaux</a></li>
		</ul>
	</nav>
		