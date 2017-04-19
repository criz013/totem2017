<!--création d'une liste de liens pour accéder au différents formulaires-->

        <form action="<?php echo $this->url("homePage_inscription")?>" method="POST" class="text-center sign form-horizontal">
            
                <div id="useraccount" class="step step1">
                    <?php $this->insert('front/part/signup/useraccount'); ?>
                </div>
                <?php /*
                <div id="userprofile" class="step step2">
                    <?php $this->insert('front/part/signup/userprofile'); ?>
                </div>
                
                <div id="twizzyteam" class="step step3">
                    <?php $this->insert('front/part/signup/twizzyteam'); ?>
                </div>
                    */?>
                <input type="hidden" name="operation" value="signup"/>
                <div class="form-group">
                    <button type="submit" class="btn btn-vert">Proposer ma participation</button>
                </div>
                <div class="form-group msgErreurs">
                <ul>
                <?php var_dump($message)?>
                </ul>
                </div>
            </form>
        <?php /*

        <div id="sidenav-content">
            
            <form action="/totem2/public/inscription" method="POST">
            
                <div id="useraccount" class="step step1">
                    <?php $this->insert('front/part/signup/useraccount'); ?>
                </div>
                <?php /*
                <div id="userprofile" class="step step2">
                    <?php $this->insert('front/part/signup/userprofile'); ?>
                </div>
                
                <div id="twizzyteam" class="step step3">
                    <?php $this->insert('front/part/signup/twizzyteam'); ?>
                </div>
				
                <input type="hidden" name="operation" value="signup">
                <button type="submit" class="btn btn-success">Valider ma participation</button>
                
            </form>
          */?>
        <!-- </div> -->