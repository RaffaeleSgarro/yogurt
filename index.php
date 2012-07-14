<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article class="excerpt" ?>
				<time class="stamp"><?php the_time("d") ?>
          <div class="month"><?php the_time("M") ?></div>
        </time>
        <div class="preview"><!-- Encompasses header and section-->
				<header>
				  <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
          </h2>
		    </header>
		
		    <section>
		      <?php the_content('[More...]') ?>
          <p><?php tags() ?></p>
			  </section>
        </div> <!-- Ends div.preview -->
				
			</article>

		<?php endwhile; ?>

			<ul class="prevnext">
				<li><?php next_posts_link('&lt; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &gt;') ?></li>
			</ul>

	<?php else : ?>

		<article class="noposts">
			<h2>404 - Content Not Found</h2>
			<p>We don't seem to be able to find the content you have requested - why not try a search below?</p>
			<?php get_search_form(); ?>
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
