<?php
?>
<table class="table table-stripped table-hover">
	<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Rôle</th>
		<th>Téléphone</th>
		<th>E-mail</th>
		<th>Status</th>
		<th>Valider</th>
		<th>Date de creation</th>
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
		<td><?php echo $item['status']; ?></td>
		<td><?php if ($item['valider'] == 1){
			echo 'Valider';
		}elseif ($item['valider'] == 0){
			echo 'En attente';
		}?></td>
		<td><?php echo $item['created']; ?></td>
		<td>
			<a href="<?php echo $this->url('user_inscription_detail',['id'=>$item['id']]) ?>">Détail</a> -
			<a href="<?php echo $this->url('user_userValider',['id'=>$item['id']]) ?>">Valider</a> -
			<a href="<?php echo $this->url('user_userRefuser',['id'=>$item['id']]) ?>">Refuser</a> -
			<a href="<?php echo $this->url('user_userTraitement',['id'=>$item['id']]) ?>">En cour</a>
		</td>
	</tr>
		<?php }
		?>
</table>