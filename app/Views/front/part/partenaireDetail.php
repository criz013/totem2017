<?php
/*
 * 'id' => string '37' (length=2)
  'last_name' => string 'administrateur' (length=14)
  'first_name' => string 'administrateur' (length=14)
  'role' => string 'sponsor' (length=7)
  'phone' => string '0011223344' (length=10)
  'email' => string 'administrateur@totem.fr' (length=23)
  'created' => string '2017-04-15 03:10:28' (length=19)
  'modified' => null
  'status' => string 'refuser' (length=7)
  'token_validation' => string '0y_XE-h5OdgroeZMTVi-7aVsOfHiv9fp' (length=32)
  'token_lost_pwd' => null
  'username' => string 'administrateur@totem.fr' (length=23)
  'valider' => string '0' (length=1)
 */

$objetUsersModel = new \W\Model\UsersModel;
$tabUsers= $objetUsersModel->find($id);
$objetUsersProfilModel = new \Model\Users_profilModel;
$usersProfil=  $objetUsersProfilModel->search(['id_users'=>$id]);

?>
<div class="col-xs-12 col-sm-12 col-md-8">
    <h1>Fiche utilisateur</h1>
    <form method="post" action="" id="fiche-user" class="form form-horizontal">
    	<div class="form-group">
            <label for="last_name" class="control-label col-sm-4 hidden-xs">Nom :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="last_name" name="last_name" value="<?php echo $tabUsers['last_name'] ?>" >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="first_name" class="control-label col-sm-4 hidden-xs">Prenom :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo $tabUsers['first_name'] ?>" >
    		</div>
    	</div>

    	<div class="form-group">
            <label for="phone" class="control-label col-sm-4 hidden-xs">Téléphone :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="phone" name="phone" value="<?php echo $tabUsers['phone'] ?>" >
    		</div>
    	</div>

    	<div class="form-group">
            <label for="email" class="control-label col-sm-4 hidden-xs">E-mail :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="email" name="email" value="<?php echo $tabUsers['email'] ?>" >
    		</div>
    	</div>
    		<input type="hidden" id="operation" name="operation" value="utilisateur" >
    	<?php if($tabUsers['role'] == 'benevole' ) {?>
    	<div class="form-group">
            <label for="avatar" class="control-label col-sm-4 hidden-xs">avatar :</label>
            <div class="hidden">
    			<input class="form-control" type="text" id="avatar" name="avatar" value="<?php echo $usersProfil[0]['avatar'] ?>" >
    		</div>
            <div class="text-center formavatar">
                
            <!-- <img src="<?= $this->assetUrl('/img/logoavatar/'.$usersProfil[0]['avatar']) ?>" alt=""> -->
            <img src="<?= $this->assetUrl('/img/logoavatar/avatar.png')?>" alt="">
            </div>
    	</div>
    	<?php }?>
    	
    	<?php if($tabUsers['role'] == 'sponsor' ) {?>
    	<div class="form-group">
            <label for="logo" class="control-label col-sm-4 hidden-xs">logo :</label>
            <div class="hidden">
    			<input class="form-control" type="text" id="logo" name="logo" value="<?php echo $usersProfil[0]['logo'] ?>" >
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
    	        <input type="button" class="btn btn-primary" id="btnZoomIn" value="Zoom +">
    	        <input type="button" class="btn btn-primary" id="btnZoomOut" value="Zoom -">
    	        </div>
    	        <div>
    	        <input type="button" class="btn btn-vert" id="btnCrop" value="Enregister">
    	        </div>
    	    </div>
        <!-- <div class="cropped">

        </div> -->
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
                //$("#avatar").val(img.slice(22));
                //$("#logo").val(img.slice(22));
                $("#avatar").val(img);
                $("#logo").val(img);
                // console.log($("#logo").val());
                
                // $('.cropped').append('<img src="'+img+'">');
                // return img;
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
            <label for="name_compagny" class="control-label col-sm-4 hidden-xs">Nom entreprise :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="name_compagny" name="name_compagny" value="<?php echo $usersProfil[0]['name_compagny'] ?>" >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="link" class="control-label col-sm-4 hidden-xs">Site internet :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="link" name="link" value="<?php echo $usersProfil[0]['link'] ?>" >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="description" class="control-label col-sm-4 hidden-xs">Descriptif :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="description" name="description" value="<?php echo $usersProfil[0]['description'] ?>" >
    		</div>
    	</div>
    	
    	<div class="form-group">
            <label for="haschtag" class="control-label col-sm-4 hidden-xs">haschtag :</label>
            <div class="col-sm-8">
    			<input class="form-control" type="text" id="haschtag" name="haschtag" value="<?php echo $usersProfil[0]['haschtag'] ?>" >
    		</div>
    	</div>
    <?php }?>
    </form>

<?php if($tabUsers['role'] == 'sponsor' ) {?>
    <form action="" method="post">
        <h3>Equipier 1</h3>
    	<div class="form-group">
	        <label for="nom_equip1" class="control-label col-sm-4 hidden-xs">Nom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="nom_equip1" name="nom_equip1" value="" >
			</div>
		</div>
		
		<div class="form-group">
	        <label for="prenom_equip1" class="control-label col-sm-4 hidden-xs">prenom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="prenom_equip1" name="prenom_equip1" value="" >
			</div>
		</div>
		
		<div class="form-group">
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
		</div>
		<h3>Equipier 2</h3>
        <div class="form-group">
	        <label for="nom_equip2" class="control-label col-sm-4 hidden-xs">Nom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="nom_equip2" name="nom_equip2" value="" >
			</div>
		</div>
		
		<div class="form-group">
	        <label for="prenom_equip2" class="control-label col-sm-4 hidden-xs">prenom :</label>
	        <div class="col-sm-8">
				<input class="form-control" type="text" id="prenom_equip2" name="prenom_equip2" value="" >
			</div>
		</div>
		
		<div class="form-group">
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
		</div>
		<input type="hidden" id="operation" name="operation" value="pilote" >
		<button>Ajouter</button>
<?php }?>
        <div class="form-group">
            <button type="submit" class="btn btn-vert">Modifier</button>
        </div>

    </form>

</div>

