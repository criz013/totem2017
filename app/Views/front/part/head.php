<?php
//$globals = new \Controller\GlobalsController;
//$this->engine->addData($globals->getData());
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $web[0]['titre'];?> </title>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <!-- 
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/bootstrap-image-gallery.css">
    -->
    
	<link rel="stylesheet" href="<?= $this->assetUrl('css/components/navigation.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/components/footer.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/home-video.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/lastEdition.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/currentEdition.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/equipages.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/currentEdition-partenaires.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/components/sidenav.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/lastEdition-photos.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/classement.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/lastEdition-partenaires.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/revuedepresse.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/sections/contact.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/fonts.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/profile.css') ?>" />
	<link rel="stylesheet" href="<?= $this->assetUrl('css/cropbox.css') ?>">
	
	<!--
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
	<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
    -->
    
<?= $this->section('css') ?>

</head>
<body>
