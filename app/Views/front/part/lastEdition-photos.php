<!-- 

Fichier gallerie pour l'edition 2016 contenant :
- grille de photo
    -> chaque photo est un lien qui appelle le slider => <a href="#"><img src="exemple.jpg" alt="exemple"></a>
    -> utiliser la librairie Masonry pour définir les colonnes => http://masonry.desandro.com/options.html
- section slider
    -> toutes les photos
    -> display:none par défaut
-->

	<div class="container">
        <h1 class="titre-galerie">Galerie édition 2016</h1>
    </div>
   
    <!-- Le conteneur pour la liste des exemples d'images -->
    <div class="container">
        <div class="row" id="links">
            <div class='list-group gallery'>
        <?php
            $annee = 2016;
            $urldir = "/img/img-lastEdition/";
            $dir ='./assets'.$urldir.$annee.'/';

            // Ouvre un dossier, et liste tous les fichiers
            if (is_dir($dir))
            {
                if ($dh = opendir($dir))
                {
                    while (($file = readdir($dh)) !== false)
                    {
                        if(substr($file,-3)=="jpg" || substr($file,-3)=="png")
                        {
                            $url=$this->assetUrl('.'.$urldir.$annee.'/'.$file.filetype($file));
                            echo '<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 vignette">';
                            echo '<a class="fancybox" data-fancybox="img2016" href="'.$url.'"><img class="img-responsive" src="'.$url.'" alt="challenge totem '.$annee.'"></a>';
                            echo '</div>';
                        }
                    }
                    closedir($dh);
                }
            }
         ?>
            </div>
        </div>
    </div>
        
<!-- *********************************************  fin section galerie *************************************************************    -->

