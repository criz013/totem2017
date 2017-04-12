<nav class="navbar navbar-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Challenge Totem</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/public/dashboard">Tableau de bord</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs"></i> Configurer <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/public/dashboard/website">Informations générales <i class="fa fa-caret-right align-right"></i></a></li>
                <li><a href="/public/dashboard/challenges">Challenges <i class="fa fa-caret-right align-right"></i></a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user["last_name"] . ' ' . $user["first_name"] ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <?php if($user['type'] === 'twizzy' || $user['type'] === 'company') { ?>
                <li><a href="#">Voir profil</a></li>
                <li><a href="#">Modifier profil</a></li>
                <?php } ?>
                <li><a href="/public/dashboard/account">Paramètres de compte</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/public/auth/logout">Logout</a></li>
            </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>