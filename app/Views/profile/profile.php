<?php $this->layout('layout', ['title' => 'Profile']) ?>

<?php $this->start('main_content') ?>

<div id="profile">
    <div class="container">
    	<div class="row">
    		<div class="col-lg-3 col-sm-6 col-sm-offset-4">
                <div class="card hovercard">
                    <div class="cardheader">
    					<img alt="<?= $team["team_pilot_firstname"] ?> <?= $team["team_pilot_name"] ?>" src="/public/<?= $team["team_pilot_pic"] ?>"/>
                    </div>
                    <div class="avatar">
                    	<img alt="<?= $company["company_name"] ?>" src="/public/<?= $company["company_logo"] ?>" />
                    </div>
                    <div class="info">
                        <div class="title">
                            <a target="_blank" href="<?= $company["company_link"] ?>"><?= $company["company_name"] ?></a>
                        </div>
                        <div class="desc"><?= $company["company_description"] ?></div>
                        <div class="desc"><?= $team["team_hashtag"] ?></div>
                    </div>
                    <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
    
            </div>
    
    	</div>
    </div>
</div>

<?php $this->stop('main_content') ?>