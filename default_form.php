<article>
<div>

<txp:if_article_image>
	<txp:article_image  class="post-image" />
<txp:else />
	<txp:if_article_category name="raspberry-pi">
		<img src="/assets/raspberry_pi_article_logo.jpg" alt="" class="post-image"/>
	</txp:if_article_category>
</txp:if_article_image>

 
	<txp:if_individual_article>
		<h1><txp:title /></h1>
	<txp:else />
		<h1><txp:permlink><txp:title /></txp:permlink></h1>
	</txp:if_individual_article>

	<txp:body />

	<p class="meta">
		Published: <txp:posted /> 
		<txp:chh_if_data>
                    | Categories: <txp:category1 link="1" title="1" />
		 <txp:chh_if_data>, <txp:category2 link="1" title="1" /></txp:chh_if_data>
		</txp:chh_if_data>
		<txp:permlink class="permlink">Permalink</txp:permlink>
	</p>
</div>	
</article>
