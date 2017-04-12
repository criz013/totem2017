<?php $this->layout('layout', ['title' => 'Tableau de bord']) ?>

<?php $this->start('main_content') ?>

<?php /*
<!--
<nav>
    <ul class="nav nav-pills">
        <li>Tableau de bord</li>
        <li><a href="#">Paramètres du site</a></li>
        <li><a href="#">Paramètres des challenges</a></li>
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $user["last_name"] . ' ' . $user["first_name"] ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <?php if($user['type'] === 'twizzy' || $user['type'] === 'company') { ?>
                <li>
                    <a href="#">Voir profil</a>
                </li>
                <li>
                    <a href="#">Modifier profil</a>
                </li>
                <?php } ?>
                <li>
                    <a href="/public/dashboard/account">Paramètres de compte</a>
                </li>
                <li>
                    <a href="/public/auth/logout">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
-->
*/
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php $this->insert('dashboard/settings_website'); ?>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>