<?php get_header(); ?>

<div id="wrapper">

<div id="container">
	<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article>
				<header><h2><a href="<?php the_permalink() ?>" rel="bookmark">
					<?php the_title(); ?>
              	<?php if (current_user_can("edit_posts")) edit_post_link("[Edit]") ?>
            </a></h2></header>
				<section>
					<?php the_content('[More...]') ?>
				</section>
				<p><?php tags() ?></p>
			</article>
			<div class="article-separator">
				<p>* * *</p>
			</div>

		<?php endwhile; ?>

			<ul class="prevnext">
				<li><?php next_posts_link('&lt; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &gt;') ?></li>
			</ul>

	<?php else : ?>

		<article class="noposts">
			<h2>404 - Content Not Found</h2>
		</article>

	<?php endif; ?>

	</div><!-- #content -->
</div><!-- #container-->

<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

</div><!-- #wrapper -->

<?php get_footer(); ?>

