    <?php
    /**
    * Edition d'un challenge
    */
    ?>

    <?php $this->insert("back/part/head"); ?>

    <div class="row">
        <div class="container">

            <h2 class="back-style">Edition challenge</h2>


            </br>

            <?php // var_dump($challenge); ?>

            <form method="post" action="" >

                <div class="form-group">
                    <label for="annee">Année: </label>
                    <input type="text" id="annee" name="titre" class="form-control" value="<?php echo $challenge['year'];?>">
                </div>

                <div class="form-group datetime">
                    <label for="date_debut">Début: </label>

                    <div class='input-group date'>
                        <input type="text" id="date_debut" name="date_debut" class="form-control" value="<?php echo $challenge['date_start'];?>">

                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>

                <div class="form-group datetime">


                    <label for="date_fin">Fin: </label>

                    <div class='input-group date'>
                        <input type="text" name="date_fin" id="date_fin" class="form-control" value="<?php echo $challenge['date_end'];?>">

                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="<?php echo $this->url("challenge_index")?>" class="btn btn-default">Retour</a>
            </form>
        </div>
    </div>

    <?php $this->insert("back/part/footer"); ?>

    <script type="text/javascript">
        $(function () {

            $('#date_debut').datetimepicker({
                sideBySide: true,
                locale: 'fr',
                defaultDate: new Date($('#date_debut').val()),
            });

            $('#date_fin').datetimepicker({
                sideBySide: true,
                locale: 'fr',
                defaultDate: $('#date_fin').val()
            });
        });
    </script>
