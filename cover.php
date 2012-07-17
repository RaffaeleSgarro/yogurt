<?php 
/*
 * Template Name: Cover page
 */
get_header();
?>
<div id="cover_wrapper">
	<img src="<?php bloginfo("template_url") ?>/images/cover.png" />
	<div class="row">
		<div class="column left">
			<h2>Coding lover</h2>
			<p>I started this site to collect my snippets and my researches
			about programming. I love understanding what goes
			on under the hood, but if you don't write things down, you eventually
			forget them - actually you do anyhow, but well digested documentation
			certainly can help you remember</p>
		</div>
		<div class="column right">
			<h2>Happiness</h2>
			<p>My dream as a child was to make my own platform game: I was an
			addicted SNES gamer, Mario and Zelda among my favourites.
			Since then, I studied Java, Linux, TCP/IP and the most
			used scripting languages. I can't explain why, but writing lines of code makes me happy
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="column left">
			<h2>Curious</h2>
			<p>Really, what's the point in living another day if you don't learn anything new?
			I really value self-improvement, and strive hard to become a little bit better every day.
			That's why I am so passionate about open source tools: access to the codebase is a great
			way to learn from others' experience (and failures). The smart man knows we all stands on
			giants' shoulders
			</p>
		</div>
		<div class="column right">
			<h2>Agile</h2>
			<p>This is how programming should always be. It means that when you feel like
			doing something, you just do it and put it live... And it works! Sure, this
			doesn't come for free. You have to carefully engineer the development process,
			but then you can really enjoy your job. Whenever a coder feels frustrated,
			he's doing it wrong</p>
		</div>
	</div>
	
	<div class="row">
		<div class="column left">
			<h2>A bunny?</h2>
			<p>It's the kind of randomness which puts that little stupid smile on your face.
			I was looking for a mascotte for this site and, among aliens, monsters and dragons,
			this little bunny drove my attention. It was too cute to be left alone!</p>
		</div>
		<div class="column right">
			<h2>Who you really are?</h2>
			<p>My name is Raffaele, I'm from Italy and I'm <?php echo date("Y") - 1988 ?>
			years old. At this point, you should have guessed what I do in my life, so
			here is my email if you want to have a talk with me
			<a href="mailto:raffaelesgarro@gmail.com">raffaeleSgarro@gmail.com</a></p>
		</div>
	</div>
</div>
<?php get_footer(); ?>
 