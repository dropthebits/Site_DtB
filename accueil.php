<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />

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
	<a href="accueil.htm"><img src="images/banniere.png" /></a>

      </header>

<?php include("menu.php");?>

<?php include("slideshow.php");?>






<aside id="liens">
<div id = "imagesLiens">
<a href="https://twitter.com/dropthebits"><img src="images/boutons_a_droite/normal/twitter.png" name="image4" onmouseover="image4.src='images/boutons_a_droite/hover/twitter.png'" onmouseout="image4.src='images/boutons_a_droite/normal/twitter.png'" onmousedown="image4.src='images/boutons_a_droite/click/twitter.png'"/></a>
<a href="https://plus.google.com/u/0/106779908708785963041/posts"><img src="images/boutons_a_droite/normal/gogole.png" name="image5" onmouseover="image5.src='images/boutons_a_droite/hover/gogole.png'" onmouseout="image5.src='images/boutons_a_droite/normal/gogole.png'" onmousedown="image5.src='images/boutons_a_droite/click/gogole.png'"/></a>
<a href="https://www.facebook.com/dropthebits?fref=ts"><img src="images/boutons_a_droite/normal/facebook.png" name="image6" onmouseover="image6.src='images/boutons_a_droite/hover/facebook.png'" onmouseout="image6.src='images/boutons_a_droite/normal/facebook.png'" onmousedown="image6.src='images/boutons_a_droite/click/facebook.png'"/></a>
<a href="http://www.twitch.tv/dropthebits"><img src="images/boutons_a_droite/normal/twitch.png" name="image7" onmouseover="image7.src='images/boutons_a_droite/hover/twitch.png'" onmouseout="image7.src='images/boutons_a_droite/normal/twitch.png'" onmousedown="image7.src='images/boutons_a_droite/click/twitch.png'"/></a>
<a href="https://www.youtube.com/channel/UCzyfeC79C6hK3sFcpt7i5rw"><img src="images/boutons_a_droite/normal/youtube.png" name="image8" onmouseover="image8.src='images/boutons_a_droite/hover/youtube.png'" onmouseout="image8.src='images/boutons_a_droite/normal/youtube.png'" onmousedown="image8.src='images/boutons_a_droite/click/youtube.png'"/></a>
<li id="news">


<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//dropthebits.us11.list-manage.com/subscribe/post?u=703548a227ecf9b5336da40fb&amp;id=c5a478b156" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="mc-field-group">
	<label for="mce-EMAIL"></label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_703548a227ecf9b5336da40fb_c5a478b156" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="S'abonner" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
</li>

<div id="tweet">
<?php// include("tweet.php");?>

</div>
</div>
</aside>
	      <?php include('recup.php');?>



<footer id="footer">
<?php include("footer.php");?>
</footer>
</div>
  </body>
</html>
	