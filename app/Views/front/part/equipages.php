<!--

Fichier equipages contenant :
- Classement des équipages en temps réel
- Lien sur le nom de l'équipage vers la page de l'entreprise

INCLURE LE FOOTER-SECTION
-->
<div class="deco-container text-center">
      <div class="deco climbup equipages" >
        <div class="">
          <img class="cursor-deco" src="<?php echo $this->assetUrl('/img/cursor-rouge.png'); ?>"/>
        </div>
      </div>
</div>

<div class="equipages">
    <div class="container">
      <div class="row currentedition">
        <div class="col-xs-12 title" >
          <h1>Suivi des équipages</h1>
        </div>
      </div><!--/row-->
    </div><!--/container-->
</div><!--/currentedition-->
<div class="grad">
    <div class="container">
        <div id="team_list" class="">
            <?php
                include "../test/inc-classement.php";
            ?>
        </div>
    </div>
</div>

