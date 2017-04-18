
<?php 

?>

<h1>Fiche utilisateur</h1>

	<div class="form-group">
        <label for="last_name" class="control-label col-sm-4 hidden-xs">Nom :</label>
        <div class="col-sm-8">
			<input type="text" id="last_name" name="last_name" value="<?php echo $users['last_name'] ?>" disabled>
		</div>
	</div>
	
	<div class="form-group">
        <label for="first_name" class="control-label col-sm-4 hidden-xs">Prenom :</label>
        <div class="col-sm-8">
			<input type="text" id="first_name" name="first_name" value="<?php echo $users['first_name'] ?>" disabled>
		</div>
	</div>

	<div class="form-group">
        <label for="phone" class="control-label col-sm-4 hidden-xs">Téléphone :</label>
        <div class="col-sm-8">
			<input type="text" id="phone" name="phone" value="<?php echo $users['phone'] ?>" disabled>
		</div>
	</div>

	<div class="form-group">
        <label for="email" class="control-label col-sm-4 hidden-xs">E-mail :</label>
        <div class="col-sm-8">
			<input type="text" id="email" name="email" value="<?php echo $users['email'] ?>" disabled>
		</div>
	</div>
	
	<div class="form-group">
        <label for="status" class="control-label col-sm-4 hidden-xs">Status :</label>
        <div class="col-sm-8">
			<input type="text" id="status" name="status" value="<?php echo $users['status'] ?>" disabled>
		</div>
	</div>
	
	
	<?php 
		if($users['role'] == 'benevole' ) {?>
	<div class="form-group">
        <label for="avatar" class="control-label col-sm-4 hidden-xs">avatar :</label>
        <div class="col-sm-8">
			<input type="text" id="avatar" name="avatar" value="<?php echo $usersProfil[0]['avatar'] ?>" disabled>
		</div>
	</div>
	<?php }?>
	
	<?php if($users['role'] == 'sponsor' ) {?>
	<div class="form-group">
        <label for="logo" class="control-label col-sm-4 hidden-xs">logo :</label>
        <div class="col-sm-8">
			<input type="text" id="logo" name="logo" value="<?php echo $usersProfil[0]['logo'] ?>" disabled>
		</div>
	</div>
	
	<div class="form-group">
        <label for="name_compagny" class="control-label col-sm-4 hidden-xs">Nom entreprise :</label>
        <div class="col-sm-8">
			<input type="text" id="name_compagny" name="name_compagny" value="<?php echo $usersProfil[0]['name_compagny'] ?>" disabled>
		</div>
	</div>
	
	<div class="form-group">
        <label for="link" class="control-label col-sm-4 hidden-xs">Site internet :</label>
        <div class="col-sm-8">
			<input type="text" id="link" name="link" value="<?php echo $usersProfil[0]['link'] ?>" disabled>
		</div>
	</div>
	
	<div class="form-group">
        <label for="description" class="control-label col-sm-4 hidden-xs">Descriptif :</label>
        <div class="col-sm-8">
			<input type="text" id="description" name="description" value="<?php echo $usersProfil[0]['description'] ?>" disabled>
		</div>
	</div>
	
	<div class="form-group">
        <label for="haschtag" class="control-label col-sm-4 hidden-xs">haschtag :</label>
        <div class="col-sm-8">
			<input type="text" id="haschtag" name="haschtag" value="<?php echo $usersProfil[0]['haschtag'] ?>" disabled>
		</div>
	</div>
	
<?php }?>
	<div class="form-group">
		
		<a href="<?php echo $this->url('user_userValider',['id'=>$users['id']]) ?>">Valider</a> -
			<a href="<?php echo $this->url('user_userRefuser',['id'=>$users['id']]) ?>">Refuser</a> -
			<a href="<?php echo $this->url('user_userTraitement',['id'=>$users['id']]) ?>">En cour</a> -
			<a href="<?php echo $this->url('user_inscription') ?>">Retour</a>
	</div>
