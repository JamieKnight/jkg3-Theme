<!DOCTYPE html>
<html>
<head>
	<title>Jamie Knight &amp; Lion</title>
	<link href="/screen.css" media="screen" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width" />
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1379257-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	  //Please edit this tracking code if you use this theme.
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-1379257-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	</script>
</head>

<body id="home">

<nav>
	<ul>
	<li><a href="/">Home</a></li>
<!-- 	<li><a href="/about">About</a></li> -->
	<li><a href="/archive">Archive</a></li>
	<li><a href="http://pluslion.com">Work Site (+Lion)</a></li>
	</ul>
</nav>

<aside>
	<a href="/">
		<img src="/jamie_and_lion.jpg" alt="Photo of Jamie &amp; Lion" />
	</a>
	<p>The personal site and blog of slightly autistic <a href="http://bbc.co.uk/radio">developer (on BBC Radio)</a> &amp; <a href="http://pluslion.com/services">speaker</a> Jamie Knight and his trusty feline companion Lion. <!-- <a href="/about">Find out more</a>  --></p>
</aside>


<txp:if_section name=", Journal"> 
	<txp:if_individual_article>
		<txp:article />
	<txp:else />
		<txp:article_custom section="journal" limit="3" />
	</txp:if_individual_article>
</txp:if_section>


<txp:if_section name="archive">
	<div id="archive">
		<txp:if_individual_article> 		
			<txp:article />
			
			<txp:else />
			
			<txp:article_custom limit="99999" form="monthly_article" section="journal" /> 
		</txp:if_individual_article>
	</div>
</txp:if_section>
          

</body>
</html>