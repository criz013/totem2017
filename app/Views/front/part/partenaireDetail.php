<?php

$objetUsersModel = new \W\Model\UsersModel;
$tabUsers= $objetUsersModel->find($id);
$objetUsersProfilModel = new \Model\Users_profilModel;
$usersProfil=  $objetUsersProfilModel->search(['id_users'=>$id]);

?>
<div class="container">

    <h1>Fiche utilisateur</h1>
    <form method="post" action="<?php echo $this->url("user_updateUser",['id'=>$id]);?>" id="fiche-user" class="form form-horizontal" enctype="multipart/form-data">
    	<div class="form-group">
            <label for="last_name" class="control-label col-sm-4 hidden-xs">Nom :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="last_name" name="last_name" placeholder="Nom" value="<?php echo $tabUsers['last_name'] ?>" required >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="first_name" class="control-label col-sm-4 hidden-xs">Prénom :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="first_name" name="first_name" placeholder="Prénom" value="<?php echo $tabUsers['first_name'] ?>" required>
    		</div>
    	</div>

    	<div class="form-group">
            <label for="phone" class="control-label col-sm-4 hidden-xs">Téléphone :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="phone" name="phone" placeholder="téléphone" value="<?php echo $tabUsers['phone'] ?>" required>
    		</div>
    	</div>

    	<div class="form-group">
            <label for="email" class="control-label col-sm-4 hidden-xs">E-mail :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="email" name="email" placeholder="e-mail" value="<?php echo $tabUsers['email'] ?>" required>
    		</div>
    	</div>
    		<input type="hidden" id="operation" name="operation" value="utilisateur" >
    		
    	<?php if($tabUsers['role'] == 'benevole' ) {?>
    	<div class="form-group">
            <label for="avatar" class="control-label col-sm-4 col-xs-12">Avatar ou photo :</label>
            <div class="">
    			<input class="form-control hidden" type="text" id="avatar" name="avatar" value="<?php echo $usersProfil[0]['avatar'] ?>" >
    		</div>
            <div class="text-center formavatar">
                
            <img src="<?= $this->assetUrl('/img/logoavatar/'.$usersProfil[0]['avatar']) ?>" alt="">
            
            </div>
    	</div>
    	<?php }?>
    	
    	<?php if($tabUsers['role'] == 'sponsor' ) {?>
    	<div class="form-group">
            <label for="logo" class="control-label col-sm-4 col-xs-12">Logo :</label>
            <div class="">
    			<input class="form-control hidden" type="text" id="logo" name="logo" value="<?php echo $usersProfil[0]['logo'] ?>" >
    		</div>
            <div class="text-center formlogo">
                <img src="<?= $this->assetUrl('/img/logoavatar/'.$usersProfil[0]['logo']) ?>" alt=""> 
            </div>
    	</div>
    	<?php }?>
    	
    	<div class="container">
    	    <div class="imageBox">
    	        <div class="thumbBox"></div>
    	        <div class="spinner" style="display: none">Loading...</div>
    	    </div>
    	    <div class="action">
    	        <div>
    	           <input class="form-control col-xs-12" type="file" id="file">
    	        </div>
    	        <div class="text-center">
                    <input type="button" class="btn btn-primary" id="btnZoomOut" value="Zoom -">
                    <input type="button" class="btn btn-primary" id="btnZoomIn" value="Zoom +">
    	        </div>
    	        <div class="text-center">
    	           <input type="button" class="btn btn-vert" id="btnCrop" value="Générer image">
    	        </div>
    	    </div>
    	</div>
    	
    <script src="<?= $this->assetUrl('/js/cropbox/require.js') ?>"></script>
    
    <script>
        require.config({
            baseUrl: "<?= $this->assetUrl('/js/cropbox/') ?>",
            paths: {
                jquery: 'jquery-1.11.1.min',
                cropbox: 'cropbox'
            }
        });
        require( ["jquery", "cropbox"], function($) {
            var options =
            {
                thumbBox: '.thumbBox',
                spinner: '.spinner',
                imgSrc: '<?= $this->assetUrl('/js/cropbox/fond-voiture-clair.jpg') ?>'
            }
            var cropper = $('.imageBox').cropbox(options);
            $('#file').on('change', function(){
                var reader = new FileReader();
                reader.onload = function(e) {
                    options.imgSrc = e.target.result;
                    cropper = $('.imageBox').cropbox(options);
                }
                reader.readAsDataURL(this.files[0]);
                this.files = [];
            })
            $('#btnCrop').on('click', function(){
                var img = cropper.getDataURL();
                $("#avatar").val(img.slice(22));
                $("#logo").val(img.slice(22));  
            })

            $('#btnZoomIn').on('click', function(){
                cropper.zoomIn();
            })
            $('#btnZoomOut').on('click', function(){
                cropper.zoomOut();
            })
            }
        );
    </script>

    	<?php if($tabUsers['role'] == 'sponsor' ) {?>
    	<div class="form-group">
            <label for="name_compagny" class="control-label col-sm-4 hidden-xs">Nom de l'entreprise :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="name_compagny" name="name_compagny" placeholder="Entreprise" value="<?php echo $usersProfil[0]['name_compagny'] ?>" required>
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="link" class="control-label col-sm-4 hidden-xs">Site internet :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="link" name="link" placeholder="Site internet" value="<?php echo $usersProfil[0]['link'] ?>" required >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="description" class="control-label col-sm-4 hidden-xs">Descriptif :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="description" name="description" placeholder="Descriptif" value="<?php echo $usersProfil[0]['description'] ?>" required >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="haschtag" class="control-label col-sm-4 hidden-xs">Hashtag pour le challange :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="haschtag" name="haschtag" placeholder="Hashtag pour le challange" value="<?php echo $usersProfil[0]['haschtag'] ?>" required >
    		</div>
    	</div>
    	
    <?php }?>
        <div class="col-xs-12 col-sm-12 text-center">
            <button type="submit" class="btn btn-vert">Modifier</button>
        </div>
        <div class="col-xs-12 col-sm-12">
            <a class="btn btn-primary" href="<?php echo $this->url('homePage_index') ?>" role="button">Retour</a>
        </div>
    </form>

<?php if($tabUsers['role'] == 'sponsor' ) {?>
    <h2>Equipage</h2>
    <form class="form form-horizontal" action="<?php echo $this->url("user_updateUser",['id'=>$id]);?>" method="post">
        <h3>Equipier 1</h3>
    	<div class="form-group">
	        <label for="nom_equip1" class="control-label col-sm-4 hidden-xs">Nom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="nom_equip1" name="nom_equip1" placeholder="Nom équipier 1" value="" >
			</div>
		</div>
		
		<div class="form-group">
	        <label for="prenom_equip1" class="control-label col-sm-4 hidden-xs">Prénom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="prenom_equip1" name="prenom_equip1" placeholder="Prénom équipier 1" value="" >
			</div>
		</div>
		
		<!-- <div class="form-group">
	        <label for="Pseudo_equip1" class="control-label col-sm-4 hidden-xs">Pseudo :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="Pseudo_equip1" name="Pseudo_equip1" value="" >
			</div>
		</div>
		
		<div class="form-group">
	        <label for="avatar_equip1" class="control-label col-sm-4 hidden-xs">Avatar :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="avatar_equip1" name="avatar_equip1" value="" >
			</div>
		</div> -->
		<h3>Equipier 2</h3>
        <div class="form-group">
	        <label for="nom_equip2" class="control-label col-sm-4 hidden-xs">Nom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="nom_equip2" name="nom_equip2" placeholder="Nom équipier 2" value="" >
			</div>
		</div>
		
		<div class="form-group">
	        <label for="prenom_equip2" class="control-label col-sm-4 hidden-xs">Prénom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="prenom_equip2" name="prenom_equip2" placeholder="Prénom équipier 2" value="" >
			</div>
		</div>
		
		<!-- <div class="form-group">
	        <label for="Pseudo_equip2" class="control-label col-sm-4 hidden-xs">Pseudo :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="Pseudo_equip2" name="Pseudo_equip2" value="" >
			</div>
		</div>
		
		<div class="form-group">
	        <label for="avatar_equip2" class="control-label col-sm-4 hidden-xs">Avatar :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="avatar_equip2" name="avatar_equip2" value="" >
			</div>
		</div> -->
		<input type="hidden" id="operation" name="operation" value="pilote" >
        <div class="col-xs-12 col-sm-12 text-center">
		  <button class="btn btn-vert">Ajouter l'équipage</button>
        </div>

    </form>
 <?php }?>
    <div class="col-xs-12 col-sm-12 text-right">
        <a class="btn btn-primary" href="<?php echo $this->url('homePage_index') ?>" role="button">Retour</a>
    </div>
</div>

