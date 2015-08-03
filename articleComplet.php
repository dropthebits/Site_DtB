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
// Connexion à la base de données

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT * FROM actus WHERE slug=\'' . $_GET['slug'] . '\'');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{switch ($genre) {
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
  echo '<h1>'.nl2br(stripslashes($donnees['titre'])). '</h1>';
echo '<p>'.nl2br(stripslashes($donnees['contenu'])). '</p>';
?><div itemscope itemtype="http://schema.org/Person"><?php
		 echo'<span itemprop="name"><h3>'.nl2br(stripslashes($donnes[auteur])).'</h3></span>';
		?></div><?php
echo '<h3>'. htmlspecialchars($donnees['date_creation']) . '</h3>';

?><div id="aimer">
<img src="/images/aimer.png" />
 <a href="https://twitter.com/dropthebits"><img src="/images/footer/twitter/default.png" name="image8" onmouseover="image8.src='/images/footer/twitter/hover.png'" onmouseout="image8.src='/images/footer/twitter/default.png'" onmousedown="image8.src='/images/footer/twitter/click.png'"/></a>
<a href="https://plus.google.com/u/0/106779908708785963041/posts"><img src="/images/footer/google/default.png" name="image9" onmouseover="image9.src='/images/footer/google/hover.png'" onmouseout="image9.src='/images/footer/google/default.png'" onmousedown="image9.src='/images/footer/google/click.png'"/></a>
<a href="https://www.facebook.com/dropthebits?fref=ts"><img src="/images/footer/facebook/default.png" name="image10" onmouseover="image10.src='/images/footer/facebook/hover.png'" onmouseout="image10.src='/images/footer/facebook/default.png'" onmousedown="image10.src='/images/footer/facebook/click.png'"/></a>
</div>
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'dropthebitsfr';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<?php
}
?></div>
<footer id="footer">
<?php include("footer.php");?>
</footer>
	</div>
</body>
</html><?php
$reponse->closeCursor();

?> 



