
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
    foreach($sponsors as $team){
        $logo = $team["logo"];
        $haschtag=$team["haschtag"];
?>
                        
    <div class="equipe col-xs-12 id">
        <div class="blocSocial col-xs-7 col-sm-4 col-md-5 col-lg-4">
            <div class="tag">
                <p><?php echo $haschtag; ?></p>
            </div>
            <div class="fbk col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="imgSocial">
                    <img class="img-responsive" src="<?php echo $this->assetUrl('/img/fbk.png'); ?>"></img>  
                </div>
                <div class="likeSocial">
                    <p>1233 K</p>
                </div>
            </div>
            <div class="twt col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="imgSocial">
                    <img class="img-responsive" src="<?php echo $this->assetUrl('/img/twt.png'); ?>"></img>
                </div>
                <div class="likeSocial">
                    <p>1233 K</p>
                </div>
            </div>
            <div class="itg col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="imgSocial">
                    <img class="img-responsive" src="<?php echo $this->assetUrl('/img/instag.png'); ?>"></img>
                </div>
                <div class="likeSocial">
                    <p>1233 K</p>
                </div>
            </div>
        </div><!--blocSocial-->
        <div class="logoClassement text-center col-xs-3 col-sm-3 col-md-2 col-lg-2">
            <img class="img-responsive" src="<?php echo $this->assetUrl('/img/logoavatar/'.$logo); ?>"></img>
        </div>
        <div class="zoneProgress text-center hidden-xs col-sm-5 col-md-4 col-lg-5">
            <div class="barProgress">
                    <img class="cursorProgress" src="<?php echo $this->assetUrl('/img/cursor.png'); ?>"></img>
            </div>
        </div>
        <div class="autonomie hidden-xs hidden-sm col-md-1 col-lg-1">
            <img src="<?php echo $this->assetUrl('/img/bat-75.png'); ?>"></img>
        </div>
        <div class="zonePosition col-xs-2 hidden-sm hidden-md hidden-lg text-center">
                <p class="position text-center">2</p>
        </div>
    </div><!--equipe-->


<?php    }
    ?>
</div>
