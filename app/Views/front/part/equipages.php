<!--

Fichier equipages contenant :
- Classement des équipages en temps réel
- Lien sur le nom de l'équipage vers la page de l'entreprise

INCLURE LE FOOTER-SECTION
-->

<div class="container">
    <h1>Suivi des équipages</h1>
    <div id="team_list" class="col-md-12">
        <!--<table class="table">
            <tr>
                <th>
                    Position
                </th>
                <th>
                    Nom de l'équipage
                </th>
                <th>
                    Nombres de likes
                </th>
                <th>
                    Social Tag de l'équipage
                </th>
            </tr>
            <div class="team_loader"></div>
        </table> -->
        <?php
            include "../test/inc-classement.php";
        ?>
    </div>
        
    <!--
    <div class="col-md-6 col-md-offset-4">
        <form method="POST" action="/public/equipages/add">
            <div class="form-group">
                <label for="team_name">Quel est le nom de l'équipage ?</label>
                <input type="text" name="team_name" id="team_name" placeholder="Nom de l'équipage"/>
            </div>
            <div class="form-group">
                <label for="team_logo">Uploadez le logo de votre équipage</label>
                <input type="text" name="team_logo" id="team_logo" placeholder="Logo de l'équipage"/>
            </div>
            <div class="form-group">
                <label for="team_tag">Choisissez un tag pour votre équipage</label>
                <div class="input-group">
                    <div class="input-group-addon">#</div>
                    <input type="text" name="team_tag" id="team_tag" placeholder="Tag de l'équipage"/>
                </div>
            </div>
            <input type="submit" value="Créer un nouvel équipage" class="btn btn-default" />
        </form>
    </div>
    -->
</div>

