<div class="deco-container text-center">
      <div class="deco climbup currentPartenaires" >
        <div class="">
          <img id="" class="cursor-deco" src="../test/img/cursor-rouge.png"/>
        </div>
      </div>
</div>

<div class="row currentPartenaires">
  <div class="container">
      <div class="col-xs-12 title" >
        <h1>Partenaires 2017</h1>
      </div>
  </div>
</div>
<div class="row">
    <div class="container-fluid">
        <h1>Partenaires 2017</h1>
        <p>Cliquez sur nos Twizzys<br/> et découvrez nos équipages pour le challenge 2017!</p>
    </div>
</div>
<div id="cars-container">
    
    
    
<?php foreach ($partenaires as $key=>$partenaire) { ?>

    <div class="partenaire_car car-<?= $key ?>">
        
        <a href="/public/profile/engie">
            <div class="car-container">
                <img class="partenaire-logo" src="/public<?= $partenaire['partners_logo'] ?>"/>
            </div>
        </a>
        
    </div>
    
<?php } ?>

</div>