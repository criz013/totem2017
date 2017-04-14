
<form action="login" method="POST" class="text-center sign">
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email"/>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe"/>
    </div>
    <input type="hidden" name="operation" value="login">
    <div class="form-group">
        <!-- <input type="submit" class="btn btn-vert" value="Se connecter"/> -->
        <button type="submit" class="btn btn-vert"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Se connecter</button>
    </div>
</form>
