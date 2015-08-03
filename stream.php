<!DOCTYPE html">
<html lang="fr">
<head>
    <meta charset="utf-8" />
<meta name="description" content="Le site qui te parle de tout sur l'actus Geek et high tech du moment." />
	<link rel="stylesheet" href="/style.css" />

    <title>DropTheBits!</title>

</head>

<body>
      <div id="page">
      <header id="header">
	<a href="/accueil.htm"><img src="images/BGstream.png" /></a>

      </header>

<?php include("menu.php");?>


  <article id="popstream">
    <div id="popup2"><iframe src="http://www.twitch.tv/dropthebits/embed" frameborder="0" scrolling="no" height="488" width="800"></iframe></div>
    <div id="popup"><iframe src="http://www.twitch.tv/dropthebits/chat?popout=" frameborder="0" scrolling="no" height="400" width="800"></iframe></div>
  </article>

<footer id="footer">
<?php include("footer.php");?>
</footer>
</div>
  </body>
</html>
