<?php
$objetArticleModel = new \Model\WebsiteModel;
$tabArticle = $objetArticleModel->findAll();

?>
	<header>
		<h1>Configuration du site internet</h1>
	</header>
	<main>
	<?php 
	$id = '';	
	foreach ($tabArticle as $info){
	$id = $info['id'];
		?>
	
	<p>Titre du site: <?php echo $info['titre']; ?> </p>
	<p>Url du site: <?php echo $info['url']; ?></p>
	<p>Contact: <?php echo $info['contact']; ?></p>
	<p>Logo: <?php echo $info['logo']; ?></p>
	<p>Description: <?php echo $info['description']; ?></p>
	<p>Email: <?php echo $info['email']; ?></p>
	<p>Facebook: <?php echo $info['facebook']; ?></p>
	<p>Twitter: <?php echo $info['twitter']; ?></p>
	<p>Instagram: <?php echo $info['instansgram']; ?></p>
	<?php }?>
	<p>
		<a href="<?php echo $this->url("web_modification",['id'=>$id])?>">Modifier</a> - <a href="<?php echo $this->url("admin_index")?>">Retour</a>
	</p> 
	
</main>