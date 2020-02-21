<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Avgrund - A modal UI concept</title>

		<meta name="description" content="A modal concept which aims to give a sense of depth between the page and modal layers">
		<meta name="author" content="Hakim El Hattab">

		<meta name="viewport" content="width=800, user-scalable=no">

		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/avgrund.css">

		<script>
			function openDialog() {
				Avgrund.show( "#default-popup" );
			}
			function openSecondDialog() {
				Avgrund.show( "#second-popup" );
			}
			function closeDialog() {
				Avgrund.hide();
			}
		</script>

	</head>

	<body>

		<aside id="default-popup" class="avgrund-popup">
			<h2>That's all, folks</h2>
			<p>
				You can hit ESC or click outside to close the modal. Give it a go to see the reverse transition.
			</p>
			<p>
				If you like this you would probably enjoy <a href="http://lab.hakim.se/meny">Meny</a>, <a href="http://lab.hakim.se/reveal-js">reveal.js</a> and <a href="http://lab.hakim.se/scroll-effects">stroll.js</a>.
			</p>
			<button onclick="javascript:closeDialog();">Close</button>
		</aside>

		<aside id="second-popup" class="avgrund-popup">
			<?php require("pagina_envio.php") ?>
			<button onclick="javascript:closeDialog();">Close</button>
		</aside>

		<article class="avgrund-contents">
		
		
			
		  <button type="submit" onclick="javascript:openSecondDialog();">Open Second Avgrund</button>
			
			

			<div class="sharing">
			<a href="http://twitter.com/share" class="twitter-share-button" data-text="Avgrund - a depth-based modal concept from @hakimel" data-url="http://lab.hakim.se/avgrund" data-count="small" data-related="hakimel"></a></div>
		</article>

		<div class="avgrund-cover"></div>

		<script type="text/javascript" src="js/avgrund.js"></script>

		<a class="fork-reveal" href="https://github.com/hakimel/avgrund"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/camo.github.com/e6bef7a091f5f3138b8cd40bc3e114258dd68ddf/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>

		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

	</body>
</html>