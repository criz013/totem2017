<?php

$objetPressModel = new\Model\revue_pressModel;

$tabPress = $objetPressModel->find($id);

extract($tabPress);

?>

<h1>Formulaire pour modification d'article</h1>

<form method="post" action="" class="form-horizontal sign">
	<div class="form-group">
        <label for="titreArticle" class="control-label col-sm-4 hidden-xs">Titre :</label>
        <div class="col-sm-8">
			<input type="text" id="titreArticle" name="titre" value="<?php echo $titre ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="chapoArticle" class="control-label col-sm-4 hidden-xs">Titre :</label>
        <div class="col-sm-8">
			<input type="text" id="chapoArticle" name="chapo" value="<?php echo $chapo ?>" >
		</div>
	</div>

	<div class="form-group">
        <label for="corpsArticle" class="control-label col-sm-4 hidden-xs">Corps :</label>
        <div class="col-sm-8">
			<input type="text" id="corpsArticle" name="corp" value="<?php echo $corp ?>" >
		</div>
	</div>

	<div class="form-group">
        <label for="lienArticle" class="control-label col-sm-4 hidden-xs">Corps :</label>
        <div class="col-sm-8">
			<input type="text" id="lienArticle" name="lien" value="<?php echo $lien ?>" >
		</div>
	</div>

	<button type="submit">Modifier</button>
</form>

<?php print_r($message); ?>