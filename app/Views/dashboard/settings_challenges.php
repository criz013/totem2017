<?php $this->layout('layout', ['title' => 'Tableau de bord - Paramètres des challenges']) ?>

<?php $this->start('main_content') ?>

<?php $this->insert('dashboard/dashboard_navigation', ["user" => $user]); ?>

<div id="settings-challenge">
    
    <h2>Paramètres des challenges</h2>
    
    <form>
        <div class="form-group">
            <label for="site_logo">Logo</label>
            <input type="file" name="site_logo" id="site_logo" accept="image/*" />
        </div>
        
        <div class="form-group">
            <label for="site_name">Titre</label>
            <input type="text" name="site_name" id="site_name" />
        </div>
        
        <div class="form-group">
            <label for="site_description">Description du site</label>
            <textarea name="site_description" id="site_description"></textarea>
        </div>
        
        <div class="form-group">
            <label for="site_url">Nom de domaine</label>
            <input type="text" name="site_url" id="site_url" />
        </div>
        
        <div class="form-group">
            <label for="site_contact_email">Adresse email de contact</label>
            <input type="text" name="site_contact_email" id="site_contact_email" />
        </div>
        
        <input type="submit" value="Sauvegarder"/>
    </form>
</div>

<?php $this->stop('main_content') ?>