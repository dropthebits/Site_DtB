<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
<link rel="stylesheet" href="/style.css" />
<meta name="description" content="Le site qui te parle de tout sur l'actus Geek et high tech du moment." />

    <title>DropTheBits!</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65533473-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
      <div id="page">
      <header id="header">
	<a href="/accueil.htm"><img src="/images/banniere.png" /></a>

      </header>
<?php include("menu.php");?>
<?php include("liens.php");?>

<div id="articleCat">
<?php
//Connexion à la base de données

$messagesParPage=4; //Nous allons afficher 5 messages par page.
 
//Une connexion SQL doit être ouverte avant cette ligne...
$retour_total=mysql_query('SELECT COUNT(*) AS total FROM actus WHERE genre=\'' . $_GET['genre'] . '\''); //Nous récupérons le contenu de la requête dans $retour_total
$donnees_total=mysql_fetch_assoc($retour_total); //On range retour sous la forme d'un tableau.
$total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
 
//Nous allons maintenant compter le nombre de pages.
$nombreDePages=ceil($total/$messagesParPage);
 
if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle=intval($_GET['page']);
 
     if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle=$nombreDePages;
     }
}
else // Sinon
{
     $pageActuelle=1; // La page actuelle est la n°1    
}
 
$premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire
 



 
 
$pdo = new PDO('mysql:host=' . $dbServer . ';port=' . $port . ';dbname=' . $dbName, $dbUser, $dbPass);
$pdo->exec("SET CHARACTER SET utf8");
$exec = $pdo->prepare('SELECT * FROM actus WHERE genre=\'' . $_GET['genre'] . '\' ORDER BY id DESC LIMIT :debut, :msg');
$exec->bindParam(':debut', $premiereEntree, PDO::PARAM_INT);
$exec->bindParam(':msg', $messagesParPage, PDO::PARAM_INT);
$exec->execute();
while ($result = $exec->fetch(PDO::FETCH_ASSOC)) {
    $slug=$result['slug'];
	$title   = $result['titre'];
	$auteur   = $result['auteur'];
    $content = $result['contenu'];
    $genre   = $result['genre'];
	$date   = $result['date_creation'];
    $img     = NULL;
     
     
    switch ($genre) {
        case 'actus':
            $img = '/images/IMGactus.png';
            break;
         
        case 'esport':
            $img = '/images/IMGesport.png';
            break;
         case 'Tuto':
            $img = '/images/IMGtuto.png';
            break;
        default:
            $img = '/images/banniere_edito.png';
    }
     
     echo '<img src="' . $img . '"';?><br><br><?php
	 		echo'<a href="/'.nl2br(stripslashes($slug)).'.html"rel="follow"><h1>'.nl2br(stripslashes($title)).'</h1></a>';
			echo'<p>'.nl2br(stripslashes($content)).'</p><br><br>';
		  echo'<a href="/'.nl2br(stripslashes($slug)).'.html"rel="follow">Réagir ?!</a>';
		  ?><div itemscope itemtype="http://schema.org/Person"><?php
		 echo'<span itemprop="name"><h3>'.nl2br(stripslashes($auteur)).'</h3></span>';
		?></div><?php;
		  echo'<h3>'.nl2br(stripslashes($date)).'</h3>';

?><div id="aimer"><img src="/images/aimer.png" />
 <a href="https://twitter.com/dropthebits"><img src="/images/footer/twitter/default.png" name="image8" onmouseover="image8.src='/images/footer/twitter/hover.png'" onmouseout="image8.src='/images/footer/twitter/default.png'" onmousedown="image8.src='/images/footer/twitter/click.png'"/></a>
<a href="https://plus.google.com/u/0/106779908708785963041/posts"><img src="/images/footer/google/default.png" name="image9" onmouseover="image9.src='/images/footer/google/hover.png'" onmouseout="image9.src='/images/footer/google/default.png'" onmousedown="image9.src='/images/footer/google/click.png'"/></a>
<a href="https://www.facebook.com/dropthebits?fref=ts"><img src="/images/footer/facebook/default.png" name="image10" onmouseover="image10.src='/images/footer/facebook/hover.png'" onmouseout="image10.src='/images/footer/facebook/default.png'" onmousedown="image10.src='/images/footer/facebook/click.png'"/></a>
</div>
<?php
     
}


  ?><?php

  echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages

  for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i==$pageActuelle) //Si il s'agit de la page actuelle...
     { 
         echo ' [ '.$i.' ] '; 
     }	 
	
	 
     else//Sinon...
     {
          echo ' <a href="/' . $_GET['genre'] . '/'.$i.'">'.$i.'</a> ';;
     }
}
echo '</p>';
?></div>
<footer id="footer">
<?php include("footer.php");?>
</footer>
	</div>
</body>
</html>
