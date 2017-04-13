<!--
Fichier de navigation contenant :
- logo (visible seulement quand la navigation atteint le haut de la fenêtre
- liens vers les sections
-->

<nav id="nav-onepage" class="navbar navbar-onepage">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header  col-xs-2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#header">
        <img alt="challengeTotem" src="<?= $this->assetUrl('img/logo.gif') ?>" width="100" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse  col-xs-6 col-xs-offset-4" id="navbar-collapse">
      <ul class="nav navbar-nav text-center navbar-scroll">
        <li><a href="#currentEdition">Edition 2017</a></li>
        <!-- <li><a href="#currentEdition_partenaires">Partenaires 2017</a></li> -->
        <li><a href="#equipages">Suivi des équipages</a></li>
        <li><a href="#revuedepresse">Revue de presse</a></li>
        <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Autre éditions <span class="caret"></span></a>
          <ul id="navEditionsList" class="dropdown-menu">
            <li><a href="#collapse2016">2016</a></li>
            <li><a href="#collapse2015">2015</a></li>
          </ul>
      </li>
<!--         <li><a href="#lastEdition">Autres éditons</a></li>
 -->      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



          <!--<div id="sidenav-seconnecter" class="container">-->
          <!--  <div class="close"><i class="fa fa-close"></i></div>-->
          <!--  <h2 class="text-center">Se connecter</h2>-->
          <!--  <?php $this->insert('front/part/login'); ?>-->
          <!--</div>-->
        
        
        