<div class="row">
        <div id="socialFooter" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h4> Suivez-nous sur </h4>
            <div class="col-xs-4 col-sm-offset-3 col-sm-2 col-md-offset-3 col-md-2 col-lg-offset-3 col-lg-2 text-center">
                
                   <a href="<?php echo $web[0]['facebook'];?>">
                       <img class="" src="../test/img/fbk.png"></img>
                   </a>
                
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-center">
                
                    <a href="<?php echo $web[0]['twitter'];?>">
                        <img class="" src="../test/img/twt.png"></img>
                     </a>
            </div>

            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-center">
                
                    <a href="<?php echo $web[0]['instansgram'];?>">
                        <img class="" src="../test/img/instag.png"></img>
                     </a>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">	
        
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 text-center">
            <h5> Challenge 2017</h5>
            <ul>
            	<li><a href="#sidenav-participer">Participer</a></li>
				<li><a href="#sidenav-seconnecter">Se connecter</a></li>
				<li><a href="#currentEdition_partenaires">Partenaires 2017</a></li>
				<li><a href="#equipages">Suivi des équipages</a></li>
				<li><a href="#revuedepresse">Revue de presse</a></li>
				<li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 text-center">
            <h5> Autres Editions </h5>
            <ul id="footerEditionsList">
                <li><a href="#collapse2016">Edition 2016</a></li>
                <li><a href="#collapse2015">Edition 2015</a></li>
                
            </ul>
        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
            <h5> Nous contacter </h5>
            <div>
                <h4><?php echo $web[0]['titre'];?></h4>
            </div>
            <div class="footerInfo">    
            	<div class="iconInfo">
            	    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-map-marker fa-stack-1x"></i>
                    </span>
                </div>
                <adress>
                    <p>    
            	       <a href="https://goo.gl/maps/2mzBsQ3LaLy" target="_blank">
            	           <?php echo $web[0]['adresse'];?><br/><?php echo $web[0]['codePostal'].' '.$web[0]['ville'];?>
            	       </a>
            	    </p>
            	</adress>
            </div>
            <div class="footerInfo">    
            	<div class="iconInfo">
            	    <span class="fa-stack fa-lg">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-mobile fa-stack-1x"></i>
                    </span>
                </div>
                <div>
                    <p><a href="tel:<?php echo $web[0]['phone'];?>"><?php echo $web[0]['phone'];?></a></p>
                </div>
            </div>
        </div>
    </div>
</div><!--container-->
    <div class="row">
        <div class="text-center" id="copyright">
            <p>Copyright © Challenge Totem 2017. All right reserved.</p>
        </div>
    </div>
    
    <!-- JAVASCRIPT FILES -->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

	
	<script src="<?= $this->assetUrl('js/sidenav.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/equipages.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/lastEdition.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/currentEdition.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/revuePresse.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/navigation.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/main.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/sections/footer.js') ?>"></script>
	
	<!-- Compteur files -->
	<script type='text/javascript' src="<?= $this->assetUrl('js/homeCountdown.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/jquery.easing.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/supersized.3.2.7.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/jquery.lwtCountdown.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/jquery.form.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/subscribe-form.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/supersized.3.2.7.min.js') ?>"></script>
	<script type='text/javascript' src="<?= $this->assetUrl('js/init.js') ?>"></script>
</body>
</html>
