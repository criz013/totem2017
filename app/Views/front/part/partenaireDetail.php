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
$tabArticle= $objetUsersModel->find($id);

?>

<h1>Fiche utilisateur</h1>
<form method="post" action="">
	<div class="form-group">
        <label for="last_name" class="control-label col-sm-4 hidden-xs">Nom :</label>
        <div class="col-sm-8">
			<input type="text" id="last_name" name="last_name" value="<?php echo $tabArticle['last_name'] ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="first_name" class="control-label col-sm-4 hidden-xs">Prenom :</label>
        <div class="col-sm-8">
			<input type="text" id="first_name" name="first_name" value="<?php echo $tabArticle['first_name'] ?>" >
		</div>
	</div>

	<div class="form-group">
        <label for="phone" class="control-label col-sm-4 hidden-xs">Téléphone :</label>
        <div class="col-sm-8">
			<input type="text" id="phone" name="phone" value="<?php echo $tabArticle['phone'] ?>" >
		</div>
	</div>

	<div class="form-group">
        <label for="email" class="control-label col-sm-4 hidden-xs">E-mail :</label>
        <div class="col-sm-8">
			<input type="text" id="email" name="email" value="<?php echo $tabArticle['email'] ?>" >
		</div>
	</div>
	
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
            $('.cropped').append('<img src="'+img+'">');
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
	<?php 
	$objetUsersProfilModel = new \Model\Users_profilModel;
$usersProfil=  $objetUsersProfilModel->search(['id_users'=>$id]);
var_dump($usersProfil);
	if($tabArticle['role'] == 'benevole' ) {?>
	<div class="form-group">
        <label for="avatar" class="control-label col-sm-4 hidden-xs">avatar :</label>
        <div class="col-sm-8">
			<input type="text" id="avatar" name="avatar" value="<?php echo $usersProfil[0]['avatar'] ?>" >
		</div>
	</div>
	<?php }?>
	
	<?php if($tabArticle['role'] == 'sponsor' ) {?>
	<div class="form-group">
        <label for="logo" class="control-label col-sm-4 hidden-xs">logo :</label>
        <div class="col-sm-8">
			<input type="text" id="logo" name="logo" value="<?php echo $usersProfil[0]['logo'] ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="name_compagny" class="control-label col-sm-4 hidden-xs">Nom entreprise :</label>
        <div class="col-sm-8">
			<input type="text" id="name_compagny" name="name_compagny" value="<?php echo $usersProfil[0]['name_compagny'] ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="link" class="control-label col-sm-4 hidden-xs">Site internet :</label>
        <div class="col-sm-8">
			<input type="text" id="link" name="link" value="<?php echo $usersProfil[0]['link'] ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="description" class="control-label col-sm-4 hidden-xs">Descriptif :</label>
        <div class="col-sm-8">
			<input type="text" id="description" name="description" value="<?php echo $usersProfil[0]['description'] ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="haschtag" class="control-label col-sm-4 hidden-xs">haschtag :</label>
        <div class="col-sm-8">
			<input type="text" id="haschtag" name="haschtag" value="<?php echo $usersProfil[0]['haschtag'] ?>" >
		</div>
	</div>
<?php }?>
<button type="submit"></button> - <a href="">Retourn</a>