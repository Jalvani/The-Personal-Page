<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Joseph Finlayson</title>
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="robots" content="all" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta http-equiv="imagetoolbar" content="false" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
	<style>
		* { padding: 0; margin: 0;  }
		body { background-color: #333; }
		#header{
			background-color: white;
			opacity: .4;
			position: absolute;
			width: 100%;
			display: inline;
			top:0px; margin:auto; 
			font-style: bold;
			padding: 3px;
			height: 2em;
			border-radius: 0px 0px 10px 10px;
			z-index: 0;
			top:0px; }
		
		p.ontop{
			font-size: 1.5em;
			font-style: italic;
			color: black;
			text-align: center;
			opacity: 1;
			top:0.2em;
			position: relative;
			z-index: 1000000;}

		p { color: #fff; font-family: Helvetica; font-size: 16px; line-height: 24px; margin-bottom: 22px; -webkit-font-smoothing: antialiased; }
		a { color: #fff; font-weight: bold; text-decoration: none; border-bottom: 1px solid rgba(255,255,255,0.3); }
		a:hover { color: #990000; border-bottom: 1px solid rgba(255,255,255,1); }
		#monogram { width: 50px; padding: 50px 0 0 0; margin: 0 auto 0 50px; display: none; }
		#about { width: 360px; float:left; padding: 0 0px 0 0px; margin: 0px 50px 0 auto !important; position: ; display: relative; clear: both; }
		/*@media ( #monogram { position: relative; width: auto; padding: 20px; margin: 0; }
		#about { position: relative; width: auto; padding: 20px; margin: 0 !important; }*/
		background-image { opacity: 0.2; }
		
	</style>
</head>	
    
<body>
	<p class = "ontop"> "All mimsy were the borogoves,
And the mome raths outgrabe" </p>
<div id = "header">
</div>
<div style="clear:both;"> </div>
<!-- swap out for a logo -->
<!-- <div id="monogram">
	
</div>  -->

<!-- swap out for information about yourself -->

<div id="about">
	<p>Joe is a cofounder. A cofounder of what he isn't sure yet. But it's going to happen soon. He's currently working at  <a href="http://accenture.com">Accenture</a>, a global management consultancy - it's not completely soul-sucking. Aside from client work, side-projects include an amazon-bitcoin interface and a way for twitter users to meet each other fo' reals.</p>
	<p>He writes about tech, politics and stuff that he stole from facebook notes at his <a href="http://blog.mimsy.co">blog</a>. Listens to all his music on <a href="http://www.last.fm/users/jungboho/">last.fm</a> and asks the occasional question on <a href="http://www.quora.com/Joe-Finlayson">Quora</a>. 
	<p>This website is absurdly hosted on <a href="http://heroku.com">Heroku</a> because I'm cheap.</p> 
	<p>If you like you can <a href=	"http://uk.linkedin.com/pub/joseph-finlayson/53/7a3/484/">hire</a> me. I'm available for web/tech consultancy and design. Send me an email at <a  href="mailto:joe@mimsy.co">joe@mimsy.co</a>.

</div>

<!--include jquery & backstretch-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.backstretch.min.js"></script>
<script type="text/javascript">
$(function(){
     $(window).resize(function(){
         if($(this).width() >= 767){
             $.backstretch("joseph.jpg", {speed: 150});
         }
      })
      .resize();//trigger resize on page load
});
</script>

</body>	
</html>