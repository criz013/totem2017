    <?php
    /**
    * Liste les challenges
    */
    ?>

    <?php $this->insert("back/part/head"); ?>

    <table class="table table-stripped table-hover">
        <tr>
            <th>Année</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Actions</th>
        </tr>

        <?php
            foreach($challenges as $challenge){
                ?>
                <tr>
                    <td><?php echo $challenge['year']; ?></td>
                    <td><?php echo $challenge['date_start']; ?></td>
                    <td><?php echo $challenge['date_end']; ?></td>
                    <td>
                        <a href="<?php echo $this->url('user_inscription_detail',['id'=>$challenge['id']]) ?>">Editer</a>
                    </td>
                </tr>
            <?php }
            ?>
    </table>

    <?php $this->insert("back/part/footer"); ?>
