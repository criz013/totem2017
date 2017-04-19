<!-- 
Fichier de la sidenav contenant:
Boutons + Formulaires d'inscriptions et de connexion
-->
<div class="col-xs-12 col-md-8 col-md-offset-4">
	<div id="sidenav-participer">
    	<div class="close sign"><i class="fa fa-close"></i></div>
		<?php $this->insert('front/part/signin',["message" => $message]); 
		?>
	</div>
</div>