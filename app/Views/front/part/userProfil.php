<?php

$objetUsersModel = new \W\Model\UsersModel;
$objetUser_profilsModel = new \W\Model\User_profilsModel;
$tabusers = $objetUsersModel->find($id);
$tabusers_profil = $objetUser_profilsModel->search(['id_users'=>$id]);

extract($tabusers);

?>

<h1>Fiche utilisateur</h1>

<form method="post" action="" class="form-horizontal sign">

	<div class="form-group">
        <label for="last_name" class="control-label col-sm-4 hidden-xs">Nom :</label>
        <div class="col-sm-8">
			<input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="first_name" class="control-label col-sm-4 hidden-xs">Prenom :</label>
        <div class="col-sm-8">
			<input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>" >
		</div>
	</div>

	<div class="form-group">
        <label for="phone" class="control-label col-sm-4 hidden-xs">Téléphone :</label>
        <div class="col-sm-8">
			<input type="text" id="phone" name="phone" value="<?php echo $phone ?>" >
		</div>
	</div>

	<div class="form-group">
        <label for="email" class="control-label col-sm-4 hidden-xs">E-mail :</label>
        <div class="col-sm-8">
			<input type="text" id="email" name="email" value="<?php echo $email ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="password" class="control-label col-sm-4 hidden-xs">Mot de passe :</label>
        <div class="col-sm-8">
			<input type="text" id="password" name="password" value="<?php echo $password ?>" >
		</div>
	</div>
	
	<?php 
		
	extract($tabusers_profil);
		if($role == 'benevole' || $role == 'admin' || $role == 'super-admin' ) {?>
	<div class="form-group">
        <label for="avatar" class="control-label col-sm-4 hidden-xs">avatar :</label>
        <div class="col-sm-8">
			<input type="text" id="avatar" name="avatar" value="<?php echo $avatar ?>" >
		</div>
	</div>
	<?php }?>
	
	<?php if($role == 'sponsor' ) {?>
	<div class="form-group">
        <label for="logo" class="control-label col-sm-4 hidden-xs">logo :</label>
        <div class="col-sm-8">
			<input type="text" id="logo" name="logo" value="<?php echo $logo ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="name_compagny" class="control-label col-sm-4 hidden-xs">Nom entreprise :</label>
        <div class="col-sm-8">
			<input type="text" id="name_compagny" name="name_compagny" value="<?php echo $name_compagny ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="link" class="control-label col-sm-4 hidden-xs">Site internet :</label>
        <div class="col-sm-8">
			<input type="text" id="link" name="link" value="<?php echo $link ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="description" class="control-label col-sm-4 hidden-xs">Descriptif :</label>
        <div class="col-sm-8">
			<input type="text" id="description" name="description" value="<?php echo $description ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="haschtag" class="control-label col-sm-4 hidden-xs">haschtag :</label>
        <div class="col-sm-8">
			<input type="text" id="haschtage" name="haschtag" value="<?php echo $haschtage ?>" >
		</div>
	</div>
<?php }?>
	<button type="submit">Modifier</button>
</form>

