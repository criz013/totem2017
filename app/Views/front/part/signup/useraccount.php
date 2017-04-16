<div id="step1">
    <h2>Participer</h2>

    <div class="form-group sign">
        <label for="role" class="control-label col-sm-4">Vous voulez devenir :</label>
            <div class="col-sm-8">
				<select name="role" id="role" class="form-control">
      				<option selected="selected">Type de participation</option>
      				<option value="sponsor">Sponsor</option>
      				<option value="benevole">Bénévole</option>
 				</select>
            </div>
			</label>            
		</div>

    <div class="form-group">
        <label for="lastname" class="control-label col-sm-4 hidden-xs">Nom :</label>
        <div class="col-sm-8">
            <input type="text" name="last_name"  class="form-control" placeholder="Nom" id="lastname" required />
        </div>
    </div>
                    
    <div class="form-group">
        <label for="firstname" class="control-label col-sm-4 hidden-xs">Prénom :</label>
        <div class="col-sm-8">
            <input type="text" name="first_name" class="form-control" placeholder="Prénom" id="firstname" required />
        </div>
    </div>
    
    <div class="form-group">
        <label for="email" class="control-label col-sm-4 hidden-xs">Email :</label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control" placeholder="Email" id="email" required />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="phone" class="control-label col-sm-4 hidden-xs">Téléphone :</label>
        <div class="col-sm-8">
            <input type="text" name="phone" class="form-control" placeholder="Téléphone" id="phone" required />
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="control-label col-sm-4 hidden-xs">Mot de passe :</label>
        <div class="col-sm-8">
        <div class="input-group pwd-chk">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" id="password" required/>
            <span class="input-group-addon" id="pwd-chk"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></span>
        </div>
        </div>
    </div>

    <div class="form-group">
        <label for="password_confirm" class="control-label col-sm-4 hidden-xs">Confirmez votre mot de passe :</label>
        <div class="col-sm-8">
        <div class="input-group pwd-chk">
            <input type="password" name="password_confirm" class="form-control pwd-chk"  placeholder="Vérification du mot de passe" id="password_confirma" required /> 
            <span class="input-group-addon" id="pwd-conf-chk"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></span>
        </div>
        </div>
    </div>
 
</div>



