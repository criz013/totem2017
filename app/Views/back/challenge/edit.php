    <?php
    /**
    * Edition d'un challenge
    */
    ?>

    <?php $this->insert("back/part/head",['log'=>$log]); ?>

    <div class="row">
        <div class="container">

            <h2 class="back-style">Edition challenge</h2>


            </br>

            <?php // var_dump($challenge); ?>

            <form method="POST" >

                <div class="form-group">
                    <label for="annee">Année: </label>
                    <input type="text" id="annee" name="annee" class="form-control" value="<?php echo $challenge['year'];?>">
                </div>
                
                <div class="form-group">
                    <label for="name">Le nom: </label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $challenge['name'];?>">
                </div>
                
                <div class="form-group">
                    <label for="description">Description: </label>
                    <input type="text" id="description" name="description" class="form-control" value="<?php echo $challenge['description'];?>">
                </div>
                
                <div class="form-group">
                    <label for="text">Corp: </label>
                    <input type="text" id="text" name="text" class="form-control" value="<?php echo $challenge['text'];?>">
                </div>
                
                <div class="form-group">
                    <label for="hashtag">Hashtag: </label>
                    <input type="text" id="hashtag" name="hashtag" class="form-control" value="<?php echo $challenge['hashtag'];?>">
                </div>
                <div class="form-group">
                    <label for="status">status: </label>
                    <input type="text" id="status" name="status" class="form-control" value="<?php echo $challenge['status'];?>">
                </div>
                <div class="form-group">
                    <label for="don">Don: </label>
                    <input type="text" id="don" name="don" class="form-control" value="<?php echo $challenge['don'];?>">
                </div>
                <div class="form-group">
                    <label for="uriMap">Uri map: </label>
                    <input type="text" id="uriMap" name="uriMap" class="form-control" value="<?php echo $challenge['uriMap'];?>">
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
