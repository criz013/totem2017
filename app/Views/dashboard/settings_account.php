<?php $this->layout('layout', ['title' => 'Tableau de bord - Mon compte']) ?>

<?php $this->start('main_content') ?>

<?php $this->insert('dashboard/dashboard_navigation', ["user" => $user]); ?>

<h2>Paramètres du compte</h2>

<p><?= $msg ?></p>

<form action="/public/dashboard/account" method="POST">
    <div class="form-group">
        <label for="last_name">Prénom</label>
        <input type="text" id="last_name" name="last_name" value="<?= $user["last_name"]; ?>" />
    </div>
    <div class="form-group">
        <label for="first_name">Nom</label>
        <input type="text" id="first_name" name="first_name" value="<?= $user["first_name"]; ?>" />
    </div>
    <div class="form-group">
        <label for="phone">Téléphone</label>
        <input type="text" id="phone" name="phone" value="<?= $user["phone"]; ?>" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?= $user["email"]; ?>" />
    </div>
    <div class="form-group">
        <label for="password">Modifier le mot de passe</label>
        <input type="text" id="password" name="password"/>
        <input type="text" name="passwordConfirm"/>
    </div>
    
    <input type="submit" value="Mettre à jour"/>
</form>

<?php $this->stop('main_content') ?>