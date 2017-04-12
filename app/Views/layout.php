<?php 
$globals = new \Controller\GlobalsController;
$this->engine->addData($globals->getData());
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->e($title) ?><?= $this->e($website_name) ?></title>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <!-- 
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/bootstrap-image-gallery.css">
    -->
    
	<link rel="stylesheet" href="<?= $this->assetUrl('css/components/navigation.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/components/footer.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/home-video.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/lastEdition.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/currentEdition.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/currentEdition-partenaires.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/components/sidenav.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/lastEdition-photos.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/lastEdition-partenaires.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/revuedepresse.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/contact.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/fonts.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/profile.css') ?>" />
	
	<!--
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
	<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
    -->
    
<?= $this->section('css') ?>

</head>
<body>
	
	<?= $this->e($website_name); ?>
	
	<main>
		<?= $this->section('main_content') ?>
	</main>
	
	<!-- inclure footer -->
	<footer>
		<?php $this->insert('partials/footer'); ?>
	</footer>
	
	<!-- JAVASCRIPT FILES -->
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--
	<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/bootstrap-image-gallery.js"></script>
	<script src="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/demo.js"></script>
	-->
	
	<!--
	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	-->
	
	<!--<?php /*
    <script type='text/javascript' src="<?= $this->assetUrl('js/sections/indexContact.js') ?>"></script> */ ?>
    -->
	
	<script src="<?= $this->assetUrl('js/sidenav.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/equipages.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/lastEdition.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/currentEdition.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/revuePresse.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/navigation.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/main.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/footer.js') ?>"></script>
	
	<!-- Compteur files -->
	<script type='text/javascript' src="<?= $this->assetUrl('js/homeCountdown.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/jquery.easing.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/supersized.3.2.7.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/jquery.lwtCountdown.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/jquery.form.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/subscribe-form.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/supersized.3.2.7.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/init.js') ?>"></script>

	
<?= $this->section('js') ?>


</body>
</html>