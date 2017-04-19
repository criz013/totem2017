<?php


?>

<h1>Formulaire pour créer un article</h1>

<form method="post" action="" class="form-horizontal sign" enctype="multipart/form-data">
	<div class="form-group">
        <label for="titreArticle" class="control-label col-sm-4 hidden-xs">Titre :</label>
        <div class="col-sm-8">
			<input type="text" id="titreArticle" name="titre" value="" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="chapoArticle" class="control-label col-sm-4 hidden-xs">Chapo :</label>
        <div class="col-sm-8">
        	<textarea rows="5" cols="100" id="chapoArticle" name="chapo"></textarea>
		</div>
	</div>

	<div class="form-group">
        <label for="corpsArticle" class="control-label col-sm-4 hidden-xs">Corps :</label>
        <div class="col-sm-8">
        	<textarea rows="5" cols="100" id="corpsArticle" name="corp"></textarea>
		</div>
	</div>

	<div class="form-group">
        <label for="lienArticle" class="control-label col-sm-4 hidden-xs">Lien :</label>
        <div class="col-sm-8">
			<input type="text" id="lienArticle" name="lien" value="" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="img" class="control-label col-sm-4 hidden-xs">Image:</label>
        <div class="col-sm-8">
			<input type="file" id="img" name="img" >
		</div>
	</div>
	
	<button type="submit">Ajouter</button>
</form>
<a class="btn btn-vert" href="<?php echo $this->url('press_index') ?>" role="button">Retour</a>
<div class="form-group">
	<ul>
       <?php foreach ($message as $item){?>
    <li><?php echo $item; ?></li>
    <?php }?>
    </ul>
	</div>
