<?php


?>

<h1>Formulaire pour créer un article</h1>

<form method="post" action="" class="form-horizontal sign">
	<div class="form-group">
        <label for="titreArticle" class="control-label col-sm-4 hidden-xs">Titre :</label>
        <div class="col-sm-8">
			<input type="text" id="titreArticle" name="titre" value="" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="chapoArticle" class="control-label col-sm-4 hidden-xs">Chapo :</label>
        <div class="col-sm-8">
			<input type="text" id="chapoArticle" name="chapo" value="" >
		</div>
	</div>

	<div class="form-group">
        <label for="corpsArticle" class="control-label col-sm-4 hidden-xs">Corps :</label>
        <div class="col-sm-8">
			<input type="text" id="corpsArticle" name="corp" value="" >
		</div>
	</div>

	<div class="form-group">
        <label for="lienArticle" class="control-label col-sm-4 hidden-xs">Lien :</label>
        <div class="col-sm-8">
			<input type="text" id="lienArticle" name="lien" value="" >
		</div>
	</div>

	<button type="submit">Ajouter</button>
</form>

<?php print_r($message); ?>