<?php
/**
 * Formulaire de modification des information du site internet déjà remplie. 
 */
$objetArticleModel = new \Model\WebsiteModel;
$tabArticle = $objetArticleModel->find($id);

extract($tabArticle);


?>
<h1>Modification des information du site</h1>
<form method="post" action="" >

	<p>
	<label for="titre">Titre: </label>
		<input type="text" id="titre" name="titre" value="<?php echo $titre;?>" placeholder="Le titre de votre site">
	</p>
	
	<p>
	<label for="url">Url: </label>
		<input type="text" id="url" name="url" value="<?php echo $url;?>" placeholder="Le lien de votre site">
	</p>
	
	<p>
	<label for="adresse">Adresse: </label>
		<input type="text" name="adresse" id="adresse" value="<?php echo $adresse ?>" placeholder="Adresse de l entreprise">
	</p>
	<p>
	<label for="codePostal">Code postal: </label>
		<input type="text" name="codePostal" id="codePostal" value="<?php echo $codePostal ?>" placeholder="Code Postal">
	</p>
	<p>
	<label for="ville">Ville: </label>
		<input type="text" name="ville" id="ville" value="<?php echo $ville ?>"  placeholder="Ville">
	</p>
	<p>
	<label for="phone">Téléphone: </label>
		<input type="text" name="phone" id="phone" value="<?php echo $phone ?>"  placeholder="Telphone">
	</p>
	
	<p>
		<img type="text" id="img" name="img" src="<?php echo $this->assetUrl("img/".$logo) ?>" >
	</p>
	<p>
		<label for="logo">Logo: </label>
		<input type="file" id="insert_img" name="insert_img" >
	</p>
	<p>
	<label for="description">Description: </label>
		<textarea name="description"  id="description" placeholder="Descripton de votre site"><?php echo $description;?></textarea>
	</p>
	<p>
	<label for="email">Email: </label>
		<input type="text" id="email" value="<?php echo $email;?>" name="email" placeholder="Votre email">
	</p>
	<p>
	<label for="facebook">Facebook: </label>
		<input type="text" id="facebook" value="<?php echo $facebook;?>" name="facebook" placeholder="Votre facebook">
	</p>
	<p>
	<label for="twitter">Twitter: </label>
		<input type="text" id="twitter" value="<?php echo $twitter;?>" name="twitter" placeholder="Votre twitter">
	</p>
	<p>
	<label for="instagram">Instagram: </label>
		<input type="text" id="instagram" value="<?php echo $instansgram;?>" name="instagram" placeholder="Votre instagram">
	</p>

	<button type="submit">MODIFIER</button> - <a href="<?php echo $this->url("web_site")?>">Retour</a>
</form>
<div class="message">
<ul>
<?php foreach ($message as $item){?>
<li><?php echo $item;?></li>
<?php }?>
</ul>
</div>

