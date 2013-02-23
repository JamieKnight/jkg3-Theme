<!DOCTYPE html>
<html>
<head>
	<title><txp:page_title /></title>
	<link href="/screen.css" media="screen" rel="stylesheet" type="text/css" />
	<txp:feed_link format="link" flavor="rss" />
	<meta name="viewport" content="width=device-width initial-scale=1.0, 
    maximum-scale=1.0, minimum-scale=1.0" />
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>

<body id="home">
	
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/archive">Archive</a></li>
			<li><a href="http://pluslion.com">Work</a></li>
			<txp:feed_link flavor="rss" wraptag="li">RSS </txp:feed_link>
		</ul>
	</nav>
	
	<aside>
		<a href="/">
			<img src="/assets/headshot.jpg" alt="Photo of Jamie &amp; Lion" />
		</a>
		<p>The personal site of <strong>Jamie Knight</strong>, a slightly autistic (<abbr title="British Boradcasting Corpoeration">BBC</abbr>)  <strong>web developer</strong>, <strong>speaker</strong> and <strong>mountain biker</strong> who is never seen far from his plush sidekick <em>Lion</em>.</p>
	</aside>
	
	<txp:if_section name=", Journal"> 
		<txp:if_category>
			<div id="archive">
				<txp:article_custom category='<txp:category_list parent=''<txp:category />'' break=""><txp:category /><txp:if_last_category><txp:else />,</txp:if_last_category></txp:category_list>' form="monthly_article" />
			</div>
		<txp:else />
			<txp:if_individual_article>
				<txp:article />
			<txp:else />
				<txp:article_custom section="journal" limit="3" />
			</txp:if_individual_article>		
		</txp:if_category>
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

	<txp:if_section name="lickr">
		<txp:article />
	</txp:if_section>
          
	<script type="text/javascript">
	  //Please edit this tracking code if you use this theme.
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-1379257-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>