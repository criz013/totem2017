<?php
$objetArticleModel = new \Model\WebsiteModel;
$tabArticle = $objetArticleModel->findAll();

?>

<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-2 text-center">
			<h2 class="back-style">Configuration du site internet</h2>		
		</div>		
	</div>
	
	
	<?php 
	$id = '';	
	foreach ($tabArticle as $info):
	$id = $info['id'];
	?>
		<div class="row"><div class="entete col-sm-4">Titre du site</div><div class="donnees col-sm-8"><?php echo $info['titre']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Url du site</div><div class="donnees col-sm-8"><?php echo $info['url']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Adresse</div><div class="donnees col-sm-8"><?php echo $info['adresse']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Code postal</div><div class="donnees col-sm-8"><?php echo $info['codePostal']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Ville</div><div class="donnees col-sm-8"><?php echo $info['ville']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Téléphone</div><div class="donnees col-sm-8"><?php echo $info['phone']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Logo</div><div class="donnees col-sm-8"><img type="text" id="img" name="img" src="<?php echo $this->assetUrl("img/".$info['logo']) ?>" ></div></div>
		<div class="row"><div class="entete col-sm-4">Description</div><div class="donnees col-sm-8"><?php echo $info['description']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Email</div><div class="donnees col-sm-8"><?php echo $info['email']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Facebook</div><div class="donnees col-sm-8"><?php echo $info['facebook']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Twitter</div><div class="donnees col-sm-8"><?php echo $info['twitter']; ?></div></div>
		<div class="row"><div class="entete col-sm-4">Instagram</div><div class="donnees col-sm-8"><?php echo $info['instansgram']; ?></div></div>
		<div class="row"><div class="entete-url col-sm-4"><a href="<?php echo $this->url("web_modification",['id'=>$id])?>">Modifier</a></div><div class="donnees col-sm-8"><a href="<?php echo $this->url("admin_index")?>"><strong>Retour</strong></a></div></div>


	<?php endforeach ?>
</div>
	


	