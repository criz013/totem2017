<!-- 
Fichier home-video (c'est le header de notre one page) contenant :
- Background vidéo
- Compteur
- boutons s'inscrire et se connecter (appelle la sidenav)
- logo du challenge
- lien edition 2017
-->

<?php /*
<video poster="<?= $this->assetUrl('../uploads/video/poster.png') ?>" id="bgvid" playsinline autoplay muted loop>
<source src="<?= $this->assetUrl('../uploads/video/trailer2017.webm') ?>" type="video/webm">
<source src="<?= $this->assetUrl('../uploads/video/trailer2017.mp4') ?>" type="video/mp4">
</video>
*/
?>

<nav id="sidenav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           <a class="navbar-brand" href="#"><img src="<?= $this->assetUrl('img/logo.jpg') ?>" alt="logo challenge" width="150" /></a>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
        <div class="right-menu">
        
        	<ul class="nav navbar-nav navbar-right">
        	
	            <li><a href="#contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> Nous contacter</a></li>
	            <?php 
        			
	            if(empty($log)){?>
	            <li><a href="#" id="btn-participer"><i class="fa fa-handshake-o" aria-hidden="true"></i> Participer</a></li>
	            <li><a href="#" id="btn-seconnecter"><i class="fa fa-sign-in" aria-hidden="true"></i> Se connecter</a></li>
	        <?php }else{?>
	        	<li><a href="<?php echo $this->url('user_partenaire',['id'=>$log['id']]);?>"> Bonjour, <?php echo $log['last_name'].' '.$log['first_name']; ?></a></li>
	        	<li><a href="<?php echo $this->url('homePage_logout');?>" >Se deconnecter</a></li>
	       <?php }
	        ?>
	        </ul>
        </div>
        </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container sidenav-container">
  <div class="row" id="login">
  <?php $this->insert('front/part/sidenav-seconnecter'); ?>
  </div>
  <div class="row" id="signin">
  <?php $this->insert('front/part/sidenav-participer'); ?>
  </div>
</div>
<div class="container">
    <div id="countdown" class="row">
        <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
        	<div class="numberContainer text-center">
            	<p class="numbers days">00</p>
        	</div>
        <div class="stringContainer text-center">
           	<p class="strings timeRefDays">Jours</p>
        </div>
        </div>
      	<div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
        	<div class="numberContainer text-center">
            	<p class="numbers hours">00</p>
        	</div>
        	<div class="stringContainer text-center">
            	<p class="strings timeRefHours">Heures</p>
         	</div>
        </div>
        <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
        	<div class="numberContainer text-center">
            	<p class="numbers minutes">00</p>
        </div>
        <div class="stringContainer text-center">
            <p class="strings timeRefMinutes">Minutes</p>
        </div>
        </div>
        <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
        	<div class="numberContainer text-center">
            	<p class="numbers seconds">00</p>
         	</div>
        <div class="stringContainer text-center">
            <p class="strings timeRefSeconds">Secondes</p>
        </div>
      	</div>
    </div>
   <!--/countdown row-->
</div>