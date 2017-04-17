<?php
?>
<table class="table table-stripped table-hover">
	<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Rôle</th>
		<th>Téléphone</th>
		<th>E-mail</th>
		<th>Action</th>
	</tr>

	<?php
		foreach($users as $item){
	?>
	<tr>
		<td><?php echo $item['last_name']; ?></td>
		<td><?php echo $item['first_name']; ?></td>
		<td><?php echo $item['role']; ?></td>
		<td><?php echo $item['phone']; ?></td>
		<td><?php echo $item['email']; ?></td>
		<td>
			<a href="<?php //echo $this->url('users_detail',['id'=>$item['id']]) ?>">Détail</a> 
			<a href="<?php //echo $this->url('press_valider',['id'=>$item['id']]) ?>">Valider</a>
			<a href="<?php //echo $this->url('press_refuser',['id'=>$item['id']]) ?>">Refuser</a>
			<a href="<?php //echo $this->url('press_refuser',['id'=>$item['id']]) ?>">En cour</a>
		</td>
	</tr>
		<?php }
		?>
</table>