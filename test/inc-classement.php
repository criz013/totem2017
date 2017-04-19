
<div class="classement col-xs-12">
    <div class="equipeHeader col-xs-12">
        <div class="col-xs-7 col-sm-4 col-md-5 col-lg-4">
            <div class="text-center">
                <p>Performance Sociale</p>
            </div>
        </div>
        <div class="text-center col-xs-3 col-sm-3 col-md-2 col-lg-2">
            <div class="text-center">
                <p>Team</p>
            </div>
        </div>
        <div class="text-center hidden-xs col-sm-5 col-md-4 col-lg-5">
            <div class="text-center">
                <p>Ratio Activité Sociale</p>
            </div>
        </div>
        <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
            <div class="text-center">
                <p>Bat.</p>
            </div>
        </div>
        <div class="col-xs-2 hidden-sm hidden-md hidden-lg text-center">
            <div class="text-center">
                <p>Pos.</p>
            </div>
        </div>
    </div><!--equipeHeader-->
<?php
    
    for($i=1; $i<=5; $i++){
    echo '<div class="equipe col-xs-12">
        <div class="blocSocial col-xs-7 col-sm-4 col-md-5 col-lg-4">
            <div class="tag">
                <p>#airbustotem</p>
            </div>
            <div class="fbk col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="imgSocial">
                    <img class="img-responsive" src="../test/img/fbk.png"></img>  
                </div>
                <div class="likeSocial">
                    <p>1233 K</p>
                </div>
            </div>
            <div class="twt col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="imgSocial">
                    <img class="img-responsive" src="../test/img/twt.png"></img>
                </div>
                <div class="likeSocial">
                    <p>1233 K</p>
                </div>
            </div>
            <div class="itg col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="imgSocial">
                    <img class="img-responsive" src="../test/img/instag.png"></img>
                </div>
                <div class="likeSocial">
                    <p>1233 K</p>
                </div>
            </div>
        </div><!--blocSocial-->
        <div class="logoClassement text-center col-xs-3 col-sm-3 col-md-2 col-lg-2">
            <img class="img-responsive" src="../test/img/airbus.png"></img>
        </div>
        <div class="zoneProgress text-center hidden-xs col-sm-5 col-md-4 col-lg-5">
            <div class="barProgress">
                    <img class="cursorProgress" src="../test/img/cursor.png"></img>
            </div>
        </div>
        <div class="autonomie hidden-xs hidden-sm col-md-1 col-lg-1">
            <img src="../test/img/bat-75.png"></img>
        </div>
        <div class="zonePosition col-xs-2 hidden-sm hidden-md hidden-lg text-center">
                <p class="position text-center">2</p>
        </div>
    </div><!--equipe-->';
    }
    ?>
</div>

    

    
    <link href="../test/classement.css" rel="stylesheet">