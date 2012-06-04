<article>
	<txp:if_article_image>
		<txp:article_image   />
	<txp:else />
		<txp:if_article_category name="raspberry-pi">
			<img src="/assets/raspberry_pi_article_logo.jpg" alt="" class="post-image"/>
		</txp:if_article_category>
	</txp:if_article_image>
		<h1><txp:permlink><txp:title /></txp:permlink></h1>
	<txp:body />
	
		<p class="meta">Published: <txp:posted /> , <txp:permlink>Permalink</txp:permlink>
	</p>
</article>