<!-- 
Fichier de la sidenav contenant:
Boutons + Formulaires d'inscriptions et de connexion
-->
<div class="col-xs-12 col-md-6 col-md-offset-6">
	<div id="sidenav-seconnecter">
    		<div class="close sign"><i class="fa fa-close"></i></div>
    		<h2 class="text-center sign">Se connecter</h2>
    		<form action="<?php echo $this->url("homepage_login")?>" method="POST" id="login" class="text-center sign">
    		<?php $this->insert('front/part/login'); ?>
    		<div class="msgErreurs"></div>
    		</form>
    </div>
    
</div>