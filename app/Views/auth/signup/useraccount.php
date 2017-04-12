<div class="container" id="step1">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h1>Je crée mon compte</h1>
            <p>Veuillez renseigner les champs ci-dessous :</p>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="lastname">Nom:</label>
                <input type="text" name="last_name"  class="form-control" placeholder="Nom" id="lastname" required />
            </div>
        </div>
                    
        <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
                <label for="firstname">Prénom:</label>
                <input type="text" name="first_name" class="form-control" placeholder="Prénom" id="firstname" required />
            </div>
        </div>
    </div>
                    
    <input type="hidden" name="role" value="user" />
                    
    <div class="row">
        <div class="col-md-offset-2 col-md-7">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Email" id="email" required />
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" id="password" required />
            </div>
        </div>
        
        <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
                <label for="password">Confirmez votre mot de passe:</label>
                <input type="password" name="password" class="form-control"  placeholder="Vérification du mot de passe" id="password" required />
            </div>
        </div>
    </div>    
                
        <input type="hidden" name="role" value="user" />
                
        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>">
        
    </div>

</div>



