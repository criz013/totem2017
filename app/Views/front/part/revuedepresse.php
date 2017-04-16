<!--

Fichier revue de presse contenant :
- liens
    -> logo
    -> titre
    -> extrait
- fichier
    -> logo du média
    -> lien => nom du fichier
    -> au click sur le lien, le pdf se télécharge
- afficher les éléments du plus récent au plus vieux

INCLURE LE FOOTER-SECTION
-->
<div class="deco-container text-center">
      <div class="deco climbdown revuedepresse" >
        <div class="">
          <img class="cursor-deco" src="../test/img/cursor-jaune.png"/>
        </div>
      </div>
</div>

<div class="revuedepresse">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 title" >
          <h1>Edition 2017</h1> <!--mettre en dynamique-->
        </div>
      </div><!--/row-->
    </div><!--/container-->
</div><!--/.revuedepresse-->

<div class="grad"> 
  <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="<?php echo $this->assetUrl("./img/img-revuPress/challengeTotem1.jpg")?>" alt="challenge totem">
                  <div class="carousel-caption">
                    <h4><a href="#">Challenge Totem 2016 - La DREAL gagne un prix</h4>
                    <h5>publié le 21 novembre 2016 (modifié le 30 novembre 2016)</a></h5>
                    <p class="excerpt"> La DREAL "éco-mobilisée" pour la semaine de réduction des déchets, gagne un des premiers prix au challenge Totem en partenariat avec "1 Déchet par jour" et "Totem Mobi"
                    <a class="label label-primary" href="http://www.paca.developpement-durable.gouv.fr/" 
                    target="_blank">Site Dreal PACA</a>
                    </p>
                  </div>
                </div><!-- /Item active -->
         
                <div class="item">
                  <img src="<?php echo $this->assetUrl("./img/img-revuPress/challengeTotem2.jpg")?>" alt="real PACA">
                   <div class="carousel-caption">
                    <h4><a href="#">Marseille : un rallye pour ramasser les déchets</h4>
                    <h5>Dimanche 20/11/2016 à 09H49  Marseille La Provence.com</a></h5>
                    <p class="excerpt"> 923 Partages <br \>
                        Le "Challenge Totem" va serpenter les rues de Marseille pour l'association "Un déchet par jour"
                        Échoplanète - Marseille : un rallye pour ramasser les déchets ...
                    <a class="label label-primary" href="http://www.laprovence.com/" target="_blank">Site La provence.com</a></p>
                  </div>
                </div><!-- /Item active -->
                
                <div class="item">
                  <img src="<?php echo $this->assetUrl("./img/img-revuPress/challengeTotem3.jpg")?>" alt="challenge totem">
                   <div class="carousel-caption">
                    <h4><a href="#">Challenge Totem 2016</h4></a>
                    <p class="excerpt"> Quand l’énergie collaborative mobilise une ville pour la nettoyer et la faire briller… 
                    C’est le Challenge TOTEM 2016 avec TOTEM Mobi les petites twizy en auto-partage, 
                    l’association 1 Déchet par Jour de notre anglais marseillais préféré Edmund Platt et Provence Booster la plate-forme de crowdfunding en Provence, 
                    nous allons vivre le 1er  » Rallye des Déchets  » de France à Marseille ...
                    <a class="label label-primary" href="http://www.marseillevert.fr/" 
                    target="_blank">Site Marseille vert</a></p>
                  </div>
                </div><!-- /Item active -->
                
                <div class="item">
                  <img src="<?php echo $this->assetUrl("./img/img-revuPress/challengeTotem4.jpg")?>" alt="challenge totem">
                   <div class="carousel-caption">
                    <h4><a href="#">Challenge Totem 2016</h4>
                    <h5>Le Challenge TOTEM 2016, action citoyenne et digitale</a></h5></a>
                    <p class="excerpt"> Le 22 novembre, à Marseille et ses alentours, a eu lieu le CHALLENGE TOTEM / 1 Déchet par Jour, 
                    un défi via les réseaux sociaux pour faire changer les habitudes en montrant l’exemple. 
                    <a class="label label-primary" href="http://mygreenstartup.com/" 
                    target="_blank">Site my Green Start Up</a></p>
                  </div>
                </div><!-- /Item active -->
        
              </div><!-- End Carousel Inner -->       

              <!-- Controls -->
              <div class="carousel-controls">
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div><!-- /caroussel-controls -->
        </div><!-- Caroussel slide -->
        <ul class="list-group">
                    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active">
                        <!--<h4>Challenge Totem 2016 - La DREAL gagne un prix</h4>-->
                        <div>
                            <div class="pastille pastille1">
                                <div class="pastille-overlay"></div>
                            </div>
                        </div>
                    </li>
                    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item">
                        <!--<h4>Marseille : un rallye pour ramasser les déchets</h4>-->
                        <div>
                            <div class="pastille pastille2">
                                <div class="pastille-overlay"></div>
                            </div>
                        </div>
                    
                    </li>
                    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item">
                        <!--<h4>Quand l’énergie collaborative mobilise une ville pour la nettoyer et la faire briller</h4>-->
                        <div>
                            <div class="pastille pastille3">
                                <div class="pastille-overlay"></div>
                            </div>
                        </div>
                    </li>
                    <li data-target="#myCarousel" data-slide-to="3" class="list-group-item">
                        <!--<h4>MyGreenStartup.com</h4>-->
                        <div>
                            <div class="pastille pastille4">
                                <div class="pastille-overlay"></div>
                            </div>
                        </div>
                    </li>
        </ul>
  </div><!-- Container -->  
</div><!-- grad -->