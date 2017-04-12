<!--création d'une liste de liens pour accéder au différents formulaires-->

<div class="row">
    <div class="container-fluid">
        <ul id="sidenavMenu" class="nav nav-pills nav-stacked">
            <h2 class="text-center">Participer</h2>
            <li id="sponsortwizzy">
                <a href="#twizzyForm">
                    Je sponsorise le challenge en Twizzy
                </a>
            </li>
            <li id="sponsor">
                <a href="#sponsorform">
                    Je sponsorise le challenge
                </a>
            </li>
            <li id="benevole">
                <a href="#">
                    J'aide les organisateurs
                </a>
            </li>
        </ul>
        
        <div id="sidenav-content">
            
            <form action="/public/signup" method="POST">
                
                <div id="useraccount" class="step step1">
                    <?php $this->insert('front/part/signup/useraccount'); ?>
                </div>
                
                <div id="userprofile" class="step step2">
                    <?php $this->insert('front/part/signup/userprofile'); ?>
                </div>
                
                <div id="twizzyteam" class="step step3">
                    <?php $this->insert('front/part/signup/twizzyteam'); ?>
                </div>
                
                <!--
                <div id="confirmation" class="step step 4">
                    <h2>Confirmation des informations</h2>
                </div>
                -->
                
                <button type="submit" class="btn btn-success">Valider ma participation</button>
                
            </form>
            
            <!--
            <div class="row">
                <div class="col-md-offset-2 col-md-7">
                    <a href="#!" id="nextstep" class="btn btn-info" role="button">Etape suivante</a>
                </div>
            </div>
            -->
            
        </div>
    </div>
</div>