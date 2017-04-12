<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- !!!! UTILISER INSERT POUR CHAQUE SECTION !!!! -->

	<!-- inclure video -->
	<section id="header" class="row">
	<?php $this->insert('home-video/home-video'); ?>
	</section>
	
	<!-- inclure nav -->
	<?php $this->insert('partials/navigation'); ?>
	
	<!-- inclure currentEdition -->
	<section id="currentEdition" class="row section">
	<?php $this->insert('currentEdition/currentEdition'); ?>
	</section>
	
	<!-- inclure currentEdition partenaires -->
	<section id="currentEdition_partenaires" class="row section">
	<?php $this->insert('currentEdition/currentEdition-partenaires', ["partenaires" => $partenaires]); ?>
	</section>
	
	<!-- inclure equipages -->
	<section id="equipages" class="row section">
	<?php $this->insert('equipages/equipages'); ?>
	</section>
	
	<!-- inclure revuedepresse -->
	<section id="revuedepresse" class="row section">
	<?php $this->insert('revuedepresse/revuedepresse'); ?>
	</section>
	
	<!-- inclure last edition -->
	<section id="lastEdition" class="row section">
	<?php $this->insert('lastEdition/lastEdition'); ?>
	</section>
	
	<!-- inclure contact -->
	<section id="contact" class="row section">
	<?php $this->insert('contact/contact'); ?>
	</section>
	
	<?php $this->insert('partials/sidenav-participer'); ?>
	<?php $this->insert('partials/sidenav-seconnecter'); ?>
	
<!-- !!!! UTILISER INSERT POUR CHAQUE SECTION !!!! -->

<?php $this->stop('main_content') ?>
