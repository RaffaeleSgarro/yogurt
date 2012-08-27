<div id="searchbox">
	<form action="#search" id="searchform" autocomplete="off">
		<input type="text" id="search" name="search" autocomplete="off">
	</form>
	<span id="search-log">Type to search</span>
	<ul id="search-result">
	</ul>
</div>

<ul>
<?php foreach( array_reverse( get_tags( array('orderby' => 'count' ) ) ) as $tag): ?>
	<li>
		<a href="<?php echo get_tag_link( $tag->term_id ) ?>">
			#<?php echo $tag->name ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>
<?php dynamic_sidebar('navigation'); ?>

