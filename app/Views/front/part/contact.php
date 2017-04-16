<!--

Fichier contact contenant :
- Formulaire de contact
    -> Nom
    -> Prénom
    -> Email
    -> Message
    -> Entreprise (champ facultatif)

-->

<div class="deco-container text-center">
      <div class="deco climbdown contact" >
        <div class="">
          <img class="cursor-deco" src="../test/img/cursor-rouge.png"/>
        </div>
      </div>
</div>

<div class="row contact">
  <div class="container">
      <div class="col-xs-12 title text-center" >
        <h1>Contactez-nous!</h1>
      </div>
  </div>
</div>

<div class="row grad">     
        <div class="container">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center"  id="contactFormHeader">
            <p>
               Vous souhaitez en savoir plus, sponsoriser l'évènement ou encore faire parti d'une Team Twizzy, contactez-nous.
            </p>
            <p>
               Nous reviendrons vers vous dans les meilleurs délais.
            </p>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <form id="contactForm" class="form-horizontal" action="" method="POST"  id="contact_form">
        
                <div class="form-group">
                  <!--<label class="col-xs-4 col-sm-4 control-label">Nom</label>  -->
                  <div class="col-xs-12 col-sm-12 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input  name="nom" class="form-control"  type="text" placeholder="Votre nom">
                    </div>
                  </div>
                </div>
        
              <!-- Text input-->
              
              <div class="form-group">
                <!--<label class="col-md-4 control-label" >Prénom</label> -->
                  <div class="col-xs-12 col-sm-12 inputGroupContainer">
                  <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="prenom" class="form-control"  type="text" placeholder="Votre prénom">
                  </div>
                </div>
              </div>
        
              <!-- Text input-->
              
              <div class="form-group">
                <!--<label class="col-md-4 control-label" >Société</label> -->
                  <div class="col-xs-12 col-sm-12 inputGroupContainer">
                  <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="societe" class="form-control"  type="text" placeholder="Votre société">
                  </div>
                </div>
              </div>
        
              <!-- Text input-->
              <div class="form-group">
                <!--<label class="col-md-4 control-label">E-Mail</label>  -->
                  <div class="col-xs-12 col-sm-12 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" class="form-control"  type="text" placeholder="Votre e-mail">
                  </div>
                </div>
              </div>
        
              <!-- Text input-->
              <div class="form-group">
                <!--<label class="col-md-4 control-label">Téléphone</label>  -->
                  <div class="col-xs-12 col-sm-12 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="telephone" class="form-control" type="text" placeholder="Votre téléphone">
                  </div>
                </div>
              </div>
        
              <!-- Text area -->
                
              <div class="form-group">
                <!--<label class="col-md-4 control-label">Votre message</label>-->
                <div class="col-xs-12 col-sm-12 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <textarea class="form-control" name="message" rows="10" placeholder="Votre message"></textarea>
                  </div>
                </div>
              </div>
        
            <!-- Message de réussite -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i>votre formulaire à été envoyée avec succès, nous vous contacterons dans les plus brefs délais.</div>
        
            <div class="col-xs-12 col-sm-12 text-center">
              <button type="submit" class="btn btn-vert">Envoyer <span class="glyphicon glyphicon-send"></span></button>
            </div>
      
          </form>
        </div>
        
      </div><!-- /.container -->

  <div class="row">
    <div class="col-lg-12 text-center">
      
      <img class="skyline" src="<?= $this->assetUrl('img/skylinemars-transparent-opt.png') ?>"/>
    </div>
  </div>
</div>
    