<?php get_header(); ?>
<div id="content" class="single">
	<div class="row">
		<main id="content-primary" role="main">
			<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article itemscope itemtype="http://schema.org/BlogPosting" class="post leftaside">
				<header class="post-header">
					<h1 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
			</article>
			<?php endwhile; ?>
			<!-- ?php comments_template(); ? -->
		</main>
		<?php get_template_part( 'partials/sidebars/sidebar', 'single' ); ?>
	</div>
</div>
<?php get_footer(); ?>