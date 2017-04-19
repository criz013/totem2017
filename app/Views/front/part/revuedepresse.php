

<!-- 

  Fichier revue de presse contenant :
  -> titre
  -> chapo ou extrait 
  -> lien à l'article
  -> thumbnail photo

-->

<div class="deco-container text-center">
      <div class="deco climbdown revuedepresse" >
        <div class="">
          <img class="cursor-deco" src="<?php echo $this->assetUrl('/img/cursor-jaune.png'); ?>"/>
        </div>
      </div>
</div>

<div class="revuedepresse">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 title" >
          <h1>Revue de presse</h1> <!--mettre en dynamique-->
        </div>
      </div><!--/row-->
    </div><!--/container-->
</div><!--/.revuedepresse-->

<div class="grad">  
  <div class="container">  
    <div class="row row-flex">     
<?php foreach ($revue as $item){?>
      <div class="col-sm-6 col-md-3 col-flex">
        <div class="thumbnail captionbox">
          <img src="<?php echo $this->assetUrl('/img/img-revuPress/'.$item['photo']);?>" alt="challenge totem">
          <div class="caption">
            <h4><?php echo $item['titre'];?></h4>
            <p ><?php echo $item['chapo'];?></p>
            <div class="thumbnailurl">
              <a href="<?php echo $item['lien'];?>" target="_blank">Lire l'article</a>
            </div>
          </div>
        </div>
      </div>
<?php }?>

    </div>
  </div>
</div>

