<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<header>
				  <h1><?php the_title(); ?>
            <? if (current_user_can("edit_posts")) edit_post_link("[Edit]") ?></h1>
		    </header>
		
				<section>
		
				<?php the_content('Read the rest of this entry &raquo;'); ?>


        			
				
					<time><?php the_time(get_option('date_format')) ?></time>

			    <?php wp_link_pages('before=<p class="pagination">&after=</p>&next_or_number=number&pagelink=page %'); ?>
          <?php tags(); ?>
				</section>

			</article>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

<?php get_footer(); ?>
