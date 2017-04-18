<?php

$objetPressModel = new\Model\revue_pressModel;

$tabPress = $objetPressModel->findAll();

 ?>

<h1>Listing articles</h1>
<a class="btn btn-vert" href="<?php echo $this->url('press_create') ?>" role="button">Créer un article</a>
<table class="table table-stripped table-hover">
	<tr>
		<th>Titre</th>
		<th>Chapo</th>
		<th>Date de creation</th>
		<th>Lien</th>
		<th>Action</th>
	</tr>

	<?php
		foreach($tabPress as $item){
	?>
	<tr>
		<td><?php echo $item['titre']; ?></td>
		<td><?php echo $item['chapo']; ?></td>
		<td><?php echo $item['dateCreate']; ?></td>
		<td><?php echo $item['lien']; ?></td>
		<td><a href="<?php echo $this->url('press_modify',['id'=>$item['id']]) ?>">Modifier</a> - <a href="<?php echo $this->url('press_delete',['id'=>$item['id']]) ?>">Supprimer</a></td>
	</tr>
		<?php }
		?>
</table>
<a href="<?php echo $this->url("admin_index")?>">Retour</a>