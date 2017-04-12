<?php
/**
* Page d'accueil du site
*/
?>
<!-- inclure video -->
	<?php $this->insert('front/part/head'); ?>

	<section id="header" class="row">
	<?php $this->insert('front/part/home-video'); ?>
	</section>
	
	<!-- inclure nav -->
	<?php $this->insert('front/part/navigation'); ?>
	
	<!-- inclure currentEdition -->
	<section id="currentEdition" class="row section">
	<?php $this->insert('front/part/currentEdition'); ?>
	</section>
	
	<!-- inclure currentEdition partenaires -->
	<section id="currentEdition_partenaires" class="row section">
	<?php $this->insert('front/part/currentEdition-partenaires'); ?>
	</section>
	
	<!-- inclure equipages -->
	<section id="equipages" class="row section">
	<?php $this->insert('front/part/equipages'); ?>
	</section>
	
	<!-- inclure revuedepresse -->
	<section id="revuedepresse" class="row section">
	<?php $this->insert('front/part/revuedepresse'); ?>
	</section>
	
	<!-- inclure last edition -->
	<section id="lastEdition" class="row section">
	<?php $this->insert('front/part/lastEdition'); ?>
	</section>
	
	<!-- inclure contact -->
	<section id="contact" class="row section">
	<?php $this->insert('front/part/contact'); ?>
	</section>
	
	<?php $this->insert('front/part/sidenav-participer'); ?>
	<?php $this->insert('front/part/sidenav-seconnecter'); ?>

<?php $this->insert('front/part/footer'); ?>