<?= $msg ?>
<form action="/public/auth/login" method="POST" class="text-center">
    <div class="form-group">
        <input type="text" name="email" placeholder="Email"/>
        <input type="password" name="password" placeholder="Mot de passe"/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Se connecter"/>
    </div>
</form>
