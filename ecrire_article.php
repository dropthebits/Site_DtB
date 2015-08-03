<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ecrire un article</title>
		<link rel="stylesheet" href="style.css"/>


		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>



	</head>

		<h1>Ecrire un article</h1>

		<form method="POST" action="article_post.php">
			<p><label for="auteur">Entrez votre pseudo : </label><input type="text" name="auteur" id="auteur" /></p>

			<p><label for="titre">Entrez le titre de votre article : </label><input type="text" name="titre" id="titre" /></p>

			<p><label for="contenu">Ecrivez votre article :</label></br>
			  <textarea cols="50" class="ckeditor" id="contenu" name="contenu" rows="10"></textarea></p>
<p>
          <select name="genre" id="genre">
           <option value="esport">E-sport</option>
           <option value="actus">Actus Général</option>
		   <option value="tuto">Tuto</option>
		   <option value="Edito">Edito</option>
          
       </select>

   </p>
			<input type="submit" name="envoyer_article" id="bouton_envoyer_article" value="Envoyer l'article"/>
		</form>
	</body>
</html>
