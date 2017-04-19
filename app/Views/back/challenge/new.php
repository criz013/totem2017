<?php


?>
 <?php $this->insert("back/part/head",['log'=>$log]); ?>
<h1>Formulaire pour créer un article</h1>

<form method="post" action="" class="form-horizontal sign" enctype="multipart/form-data">
	
                <div class="form-group">
                    <label for="year">Année: </label>
                    <input type="text" id="year" name="year" class="form-control" value="">
                </div>
                
                <div class="form-group">
                    <label for="name">Le nom: </label>
                    <input type="text" id="name" name="name" class="form-control" value="">
                </div>
                
                <div class="form-group">
                    <label for="description">Description: </label>
                    <input type="text" id="description" name="description" class="form-control" value="">
                </div>
                
                <div class="form-group">
                    <label for="text">Corp: </label>
                    <input type="text" id="text" name="text" class="form-control" value=">">
                </div>
                
                <div class="form-group">
                    <label for="hashtag">Hashtag: </label>
                    <input type="text" id="hashtag" name="hashtag" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="status">status: </label>
                    <input type="text" id="status" name="status" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="don">Don: </label>
                    <input type="text" id="don" name="don" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="uriMap">Uri map: </label>
                    <input type="text" id="uriMap" name="uriMap" class="form-control" value="">
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
<?php $this->insert("back/part/footer"); ?>