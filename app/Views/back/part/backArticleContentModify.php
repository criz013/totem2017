<?php

$objetPressModel = new\Model\revue_pressModel;

$tabPress = $objetPressModel->find($id);

extract($tabPress);

?>

<h1>Formulaire pour modification d'article</h1>

<form method="post" action="" class="form-horizontal sign" enctype="multipart/form-data">

	<div class="form-group">
        <label for="titreArticle" class="control-label col-sm-4 hidden-xs">Titre :</label>
        <div class="col-sm-8">
			<input type="text" id="titreArticle" name="titre" value="<?php echo $titre ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="chapoArticle" class="control-label col-sm-4 hidden-xs">Chapo :</label>
        <div class="col-sm-8">
        	<textarea rows="5" cols="100" id="chapoArticle" name="chapo"><?php echo $chapo ?></textarea>
		</div>
	</div>

	<div class="form-group">
        <label for="corpsArticle" class="control-label col-sm-4 hidden-xs">Corps :</label>
        <div class="col-sm-8">
        	<textarea rows="5" cols="100" id="corpsArticle" name="corp"><?php echo $corp ?></textarea>
		</div>
	</div>

	<div class="form-group">
        <label for="lienArticle" class="control-label col-sm-4 hidden-xs">Lien :</label>
        <div class="col-sm-8">
			<input type="text" id="lienArticle" name="lien" value="<?php echo $lien ?>" >
		</div>
	</div>
	<div class="form-group">
        <label for="img" class="control-label col-sm-4 hidden-xs">Image :</label>
        <div class="col-sm-8">
			<img type="text" id="img" name="img" src="<?php echo $this->assetUrl("img/".$photo) ?>" >
		</div>
	</div>
	
	<div class="form-group">
        <label for="insert_img" class="control-label col-sm-4 hidden-xs">Inserer image:</label>
        <div class="col-sm-8">
			<input type="file" id="insert_img" name="insert_img" >
		</div>
	</div>

	<button type="submit">Modifier</button>
</form>
<a class="btn btn-vert" href="<?php echo $this->url('press_index') ?>" role="button">Retour</a>
<div class="form-group">
	<ul>
       <?php foreach ($message as $item){?>
    <li><?php echo $item; ?></li>
    <?php }?>
    </ul>
	</div>
