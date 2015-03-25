<article class="entrada">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<?php the_post_thumbnail("thumbnail"); ?>
	<div class="extracto">
		<p><?php the_excerpt(); ?></p>
		<small><?php the_time("d-M-Y"); ?></small>
	</div>
</article>
<hr class="separador" />