<!-- <?php
/**
 * Formulaire de modification des information du site internet déjà remplie. 
 */
$objetArticleModel = new \Model\WebsiteModel;
$tabArticle = $objetArticleModel->find($id);

extract($tabArticle);


?>

<h1>Modification des information du site</h1>
<form method="post" action="" enctype="multipart/form-data">

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
		<img id="img" name="img" src="<?php echo $this->assetUrl("img/".$logo) ?>" >
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


 -->



 <?php
   /**
    * Formulaire de modification des information du site internet déjà remplie. 
    */
   $objetArticleModel = new \Model\WebsiteModel;
   $tabArticle = $objetArticleModel->find($id);
   
   extract($tabArticle);
   
   
   ?>	
<div class="container">
	<div class="row">

		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<h2 class="back-style">Modification des information du site</h2>
			<form method="post" action="" class="form-horizontal">
			  
			   
			   <div class="form-group">
			      <label for="titre" class="label-width">Titre: </label>
			      <input type="text" id="titre" name="titre" class="form-control-ib" value="<?php echo $titre;?>" placeholder="Le titre de votre site">
			   </div>
			   

			   <div class="form-group">
			      <label for="url"  class="label-width">Url: </label>
			      <input type="text" id="url" class="form-control-ib" name="url" value="<?php echo $url;?>" placeholder="Le lien de votre site">
			   </div>
			   <div class="form-group">
			      <label for="adresse"  class="label-width">Adresse: </label>
			      <input type="text" name="adresse" id="adresse" class="form-control-ib" value="<?php echo $adresse ?>" placeholder="Adresse de l'entreprise">
			   </div>
			   <div class="form-group">
			      <label for="codePostal"  class="label-width">Code postal: </label>
			      <input type="text" name="codePostal" id="codePostal" class="form-control-ib" value="<?php echo $codePostal ?>" placeholder="Code Postal">
			   </div>
			   <div class="form-group">
			      <label for="ville"  class="label-width">Ville: </label>
			      <input type="text" name="ville" id="ville" class="form-control-ib" value="<?php echo $ville ?>"  placeholder="Ville">
			   </div>
			   <div class="form-group">
			      <label for="phone" class="label-width">Téléphone: </label>
			      <input type="text" name="phone" id="phone" class="form-control-ib" value="<?php echo $phone ?>"  placeholder="Telphone">
			   </div>
			   
			   <div class="row">
				   <div class="form-group">
				      <label for="logo"  class="label-width">Logo: </label>
				      <input type="file" id="insert_img" class="form-control-ib" name="insert_img" >
				   </div>
				   
				   <div class="col-xs-12 col-lg-3 col-sm-6">
				      <img type="text" id="img" name="img" src="<?php echo $this->assetUrl("img/".$logo) ?>" >
				   </div>
				</div>

			   <div class="form-group">
			      <label for="description"  class="label-width">Description: </label>
			      <textarea name="description"  id="description" class="form-control-ib" placeholder="Descripton de votre site"><?php echo $description;?></textarea>
			   </div>
			   <div class="form-group">
			      <label for="email"  class="label-width">Email: </label>
			      <input type="text" id="email" class="form-control-ib" value="<?php echo $email;?>" name="email" placeholder="Votre email">
			   </div>
			   <div class="form-group">
			      <label for="facebook"  class="label-width">Facebook: </label>
			      <input type="text" id="facebook" class="form-control-ib" value="<?php echo $facebook;?>" name="facebook" placeholder="Votre facebook">
			   </div>
			   <div class="form-group">
			      <label for="twitter"  class="label-width">Twitter: </label>
			      <input type="text" id="twitter" class="form-control-ib" value="<?php echo $twitter;?>" name="twitter" placeholder="Votre twitter">
			   </div>
			   <div class="form-group">
			      <label for="instagram"  class="label-width">Instagram: </label>
			      <input type="text" id="instagram" class="form-control-ib" value="<?php echo $instansgram;?>" name="instagram" placeholder="Votre instagram">
			   </div>
			   <div class="form-group">
			   	   <label class="label-width">Action: </label>
			   	   <button type="submit" class="btn btn-primary">MODIFIER</button>
				   <a href="<?php echo $this->url("web_site")?>" class="btn btn-default">RETOUR</a>	
			   </div>
			    


			</form>		
		</div>
	</div>
</div>
	
<div class="message">
   <ul>
      <?php foreach ($message as $item){?>
      <li><?php echo $item;?></li>
      <?php }?>
   </ul>
</div>


