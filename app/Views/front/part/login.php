
<form action="<?php echo $this->url("homepage_login")?>" method="POST" id="formLogin" class="text-center sign">
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user-secret fa-lg" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="email" placeholder="Email"/>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe"/>
        </div>
    </div>
    <input type="hidden" name="operation" value="login"/>
    <div class="form-group msgErreurs">
         <ul></ul>
    </div>
    <div class="form-group msgErreurs">
                <ul>

                </ul>
                </div>
    <div class="form-group">
        <button type="submit" class="btn btn-vert"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Se connecter</button>
    </div>
</form>
