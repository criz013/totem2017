    <?php
    /**
    * Liste les challenges
    */
    ?>

    <?php $this->insert("back/part/head",['log'=>$log]); ?>
	<a href="<?php echo $this->url('challenge_news') ?>">Nouveau</a>
    <table class="table table-stripped table-hover">
        <tr>
            <th>Année</th>
            <th>Status</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Actions</th>
        </tr>

        <?php
            foreach($challenges as $challenge){
                ?>
                <tr>
                    <td><?php echo $challenge['year']; ?></td>
                    <td><?php echo $challenge['status']; ?></td>
                    <td><?php echo $challenge['date_start']; ?></td>
                    <td><?php echo $challenge['date_end']; ?></td>
                    <td>
                        <a href="<?php echo $this->url('challenge_edit',['id'=>$challenge['id']]) ?>">Editer</a> -
                    	<a href="<?php echo $this->url('challenge_activationStatus',['id'=>$challenge['id']]) ?>">Changer statu</a>
                    </td>
                </tr>
            <?php }
            ?>
    </table>

    <?php $this->insert("back/part/footer"); ?>
