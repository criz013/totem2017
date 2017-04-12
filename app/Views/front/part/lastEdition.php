<!-- 

Fichier edition 2016 contenant :
- Titre (h2)
- Paragraphe
- 4 colonnes (col-sm-3) avec dans chaque colonne :
    -> titre (h3)
    -> paragraphe

INCLURE LE FOOTER-SECTION  
-->
<div class="deco-container text-center">
      <div class="deco climbup lastedition" >
        <div class="">
          <img id="" class="cursor-deco" src="../test/img/cursor-bleu.png"/>
        </div>
      </div>
</div>
<div class="row lastedition">
    <div class="container">
        <div class="col-xs-12 title" >
            <h1>Dernières éditions</h1>
        </div>
    </div>
</div>

<section class="features grad">
	<div class="container" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="col-xs-12 text-center">
            <div class="" role="tab" id="heading2016">
              <h2 class="">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2016" aria-expanded="true" aria-controls="collapse2016">
                 Edition 2016
                </a>
              </h2>
            </div>
            <div id="collapse2016" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2015">
                <div class="panel-body">
                    <!--Teaser-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <i class="fa fa-info-circle"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>Le mot de l'orga</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, sunt, labore, vel ut et mollitia nemo cumque laboriosam odit distinctio odio obcaecati nihil maxime molestiae quam totam vitae ea voluptas!</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne1-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <i class="fa fa-hashtag"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>1.2 MILLIONS</h2>
                            <p>de likes, retweets, posts, partages en 2h ! L’impact de cette manifestation a été impressionnant: plus de 1.2 millions de personnes ont vu, aimé et partagé le hashtag #TOTEM1DPJ !</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne2-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <!--<i class="fa fa-thumbs-up"></i>-->
                                    <i class="fa fa-users"></i>
                            </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>42 BÉNÉVOLES</h2>
                            <p>Dynamiques, adorables et motivés !</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne3-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <!--<i class="fa fa-user-plus"></i>-->
                                    <i class="fa fa-handshake-o"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>45 PARTENAIRES</h2>
                            <p>Pour cette 1ère édition ! Pour les structures qui ont sponsorisé des équipages, vous allez bénéficier de l’action d’Edmund !!</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne4-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single">
                            <div class="icon-outer">
                                <div class="icon">
                                    <i class="fa fa-eur"></i>
                            </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>10 300 €</h2>
                            <p>Pour l'association 1 Déchet Par Jour / 1 Piece of Rubbish ! Suivez l’action d’1 Déchet Par Jour, la barriere humaine entre les déchets sauvages et la nature sur leur page facebook</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne5-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single">
                            <div class="icon-outer">
                                <div class="icon">
                                     <i class="fa fa-car"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>26 EQUIPAGES</h2>
                            <p>De Twizy : entreprises, institutions, associations, comédiens...Tous mobilisés car nous avons décidé de passer aux actes ..... et nous comptons bien renouveler cette belle aventure !</p>
                        </div><!--/single-->
                    </div><!--/col-->
                </div><!--/container-->
        
        		<!-- photos & partenaires edition 2016-->	
                <aside class="bg-dark">
                    <div class="container text-center">
                        <div class="call-to-action">
                            <!--/bouton partenaires-->
                            <a class="icon" id="afficher_div" href="#!">
                                <i class="fa fa-address-card-o center animated bounceInRigh" style="font-size:50px; color:white"><!--/icon--></i>
                                <span>Retrouvez les partenaires</span>
                                <span>EDITION 2016</span>
                            </a>
                            
                            <!--/bouton photos-->
                            <a class="icon" href="<?php echo $this->url('lastEdition_photos') ?>">
                                <i class="fa fa-camera center animated bounceInLeft" style="font-size:50px; color:white"><!--/icon--></i>
                                <span>Retrouvez les photos</span>
                                <span>EDITION 2016</span>
                            </a>
                        </div><!--/call-to-action-->
                    </div><!--/container-->
                    <?php $this->insert('lastEdition/lastEdition-partenaires'); ?>
                </aside><!--/bg-dark-->
        
            </div>
            <div class="" role="tab" id="heading2015">
              <h2 class="">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2015" aria-expanded="true" aria-controls="collapse2015">
                 Edition 2015
                </a>
              </h2>
            </div>
            <div id="collapse2015" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2015">
                <div class="panel-body">
                    <!--Teaser-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <i class="fa fa-info-circle"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>Le mot de l'orga</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, sunt, labore, vel ut et mollitia nemo cumque laboriosam odit distinctio odio obcaecati nihil maxime molestiae quam totam vitae ea voluptas!</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne1-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <i class="fa fa-hashtag"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>1.2 MILLIONS</h2>
                            <p>de likes, retweets, posts, partages en 2h ! L’impact de cette manifestation a été impressionnant: plus de 1.2 millions de personnes ont vu, aimé et partagé le hashtag #TOTEM1DPJ !</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne2-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <!--<i class="fa fa-thumbs-up"></i>-->
                                    <i class="fa fa-users"></i>
                            </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>42 BÉNÉVOLES</h2>
                            <p>Dynamiques, adorables et motivés !</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne3-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single text-center">
                            <div class="icon-outer">
                                <div class="icon">
                                    <!--<i class="fa fa-user-plus"></i>-->
                                    <i class="fa fa-handshake-o"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>45 PARTENAIRES</h2>
                            <p>Pour cette 1ère édition ! Pour les structures qui ont sponsorisé des équipages, vous allez bénéficier de l’action d’Edmund !!</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne4-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single">
                            <div class="icon-outer">
                                <div class="icon">
                                    <i class="fa fa-eur"></i>
                            </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>10 300 €</h2>
                            <p>Pour l'association 1 Déchet Par Jour / 1 Piece of Rubbish ! Suivez l’action d’1 Déchet Par Jour, la barriere humaine entre les déchets sauvages et la nature sur leur page facebook</p>
                        </div><!--/single-->
                    </div><!--/col-->
                    <!--colonne5-->
                    <!--<div class="col-sm-2 point5 ">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="single">
                            <div class="icon-outer">
                                <div class="icon">
                                     <i class="fa fa-car"></i>
                                </div><!--/icon-->
                            </div><!--/icon-outer-->
                            <h2>26 EQUIPAGES</h2>
                            <p>De Twizy : entreprises, institutions, associations, comédiens...Tous mobilisés car nous avons décidé de passer aux actes ..... et nous comptons bien renouveler cette belle aventure !</p>
                        </div><!--/single-->
                    </div><!--/col-->
                </div><!--/container-->
        
        		<!-- photos & partenaires edition 2016-->	
                <!--<aside class="bg-dark">-->
                    <div class="container text-center">
                        <div class="call-to-action">
                            <!--/bouton partenaires-->
                            <a class="icon" id="afficher_div" href="#!">
                                <i class="fa fa-address-card-o center animated bounceInRigh" style="font-size:50px; color:white"><!--/icon--></i>
                                <span>Retrouvez les partenaires</span>
                                <span>EDITION 2015</span>
                            </a>
                            
                            <!--/bouton photos-->
                            <a class="icon" href="<?php echo $this->url('lastEdition_photos') ?>">
                                <i class="fa fa-camera center animated bounceInLeft" style="font-size:50px; color:white"><!--/icon--></i>
                                <span>Retrouvez les photos</span>
                                <span>EDITION 2015</span>
                            </a>
                        </div><!--/call-to-action-->
                    </div><!--/container-->
                    <?php $this->insert('lastEdition/lastEdition-partenaires'); ?>
                <!--</aside><!--/bg-dark-->
        
            </div>
        </div>
    </div>
    
    
	
</section><!--/features-->
    
<?php $this->insert('partials/footer-section'); ?>

<link rel="stylesheet" href="<?= $this->assetUrl('libs/animatecss/animatecss.css') ?>" type="text/css" />
    