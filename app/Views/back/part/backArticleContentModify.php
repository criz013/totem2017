<?php

$objetPressModel = new\Model\revue_pressModel;

$tabPress = $objetPressModel->find($id);

extract($tabPress);

?>

<h1>Formulaire pour modification d'article</h1>

<form method="post" action="">
	<input type="text" name="titre" value="<?php echo $titre ?>" >
	<label>Titre</label>

	<input type="text" name="chapo" value="<?php echo $chapo ?>" >
	<label>Chapo</label>

	<input type="text" name="corp" value="<?php echo $corp ?>" >
	<label>Corp</label>

	<input type="text" name="lien" value="<?php echo $lien ?>" >
	<label>Lien</label>

	<button type="submit">Modifier</button>
</form>

<?php print_r($message); ?>