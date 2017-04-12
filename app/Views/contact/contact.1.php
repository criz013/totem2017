<!--

Fichier contact contenant :
- Formulaire de contact
    -> Nom
    -> Prénom
    -> Email
    -> Message
    -> Entreprise (champ facultatif)

-->
<div>
<form method="GET">
        <div class="container">
    		<div class="panel panel-default">
    			
    			<div class="panel-heading">
    				<h2>Nous contacter</h2>
    			</div>
    			
    			<div class="panel-body">
    				<div class="row">
    					<div class="col-xs-12 col-sm-6">
    						<div class="form-group">
    							<label for="nom">Nom</label>
    							<input data-error-message="Veuillez saisir votre nom." type="text" class="form-control obligatoire" id="nom" placeholder="Votre nom" required>
    						</div>					
    						
    						<div class="form-group">
    							<label for="prenom">Prénom</label>
    							<input data-error-message="Veuillez saisir votre prénom." type="text" class="form-control obligatoire" id="prenom" placeholder="Votre prénom" required>
    						</div>	
    						
    						<div class="form-group">
    							<label for="societe">Société</label>
    							<input data-error-message="Veuillez saisir le nom de votre société."type="text" id="societe" class="form-control obligatoire" placeholder="Votre société">
    						</div>	
    						
    						<div class="form-group">
    							<label for="email">E-Mail</label>
    							<input data-error-message="Veuillez saisir votre E-Mail" type="text" class="form-control obligatoire" id="email" placeholder="Votre E-Mail" required>
    						</div>					
    						
    						<div class="form-group">
    							<label for="societe">Téléphone</label>
    							<input type="text" class="form-control" id="telephone" placeholder="Votre téléphone" required>
    						</div>					
    					</div>
    					
    					<div class="col-xs-12 col-sm-6">
    						<div class="form-group">
                                  <label for="comment">Votre Message : </label>
                                  <textarea class="form-control" rows="10" id="comment"></textarea>
                            </div>
                                						
    						<div class="form-group">
    							<button class="btn btn-primary btn-lg btn-block" id="bouton-envoyer">
    								<i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer
    							</button>
    						</div>					
    					</div>
    
    				</div>
    			</div>
    		</div>
    	</div>    
</form>
</div>
    
    <img src="<?= $this->assetUrl('img/skylinemars-transparent.png') ?>"/>
       


	<script>
		$(document).ready(function(){

			// on relie l'événement "click sur le bouton" à un comportement
			$('#bouton-envoyer').click(function(){
				//tester si les champs sont vides
				//pour chaque 'input'
				$('.obligatoire').each(function(index, element){
					//tester si la valeur est vide
					if($(this).val() == ""){
						//message 'alert'
						//alert($(this).attr('data-error-message'));
						var span = $('<span>').addClass('invalid').html($(this).attr('data-error-message'));
						
						if($('span.invalid', $(this).parent()).length == 0){
							$(this).parent().append(span);
						}

						$(this).addClass('invalid');
					} else {
						$('span.invalid', $(this).parent()).remove();
						$(this).removeClass('invalid');
					}
				});
			})
		});
	</script>
</body>
</html>
