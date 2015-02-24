<?php get_header(); ?>
<div id="content" class="single">
	<div class="row">
		<main id="content-primary" role="main">
			<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article itemscope itemtype="http://schema.org/BlogPosting" class="post leftaside">
				<header class="post-header">
					<h1 class="post-title entry-title"><?php the_title(); ?></h1>
				</header>
				<div id='content-main' class='row'>
					<section class='post-content clearfix'>
            <iframe src='<?php the_title(); ?>' style='border: none; width: 100%;'></iframe>
					</section>
				</div>
				<?php if ( is_active_sidebar( 'widget-postfooter' ) ) : ?>
				<footer id="post-footer" class='row'>
					<?php if ( !dynamic_sidebar( 'Post Footer' ) ) : ?>
					<?php endif; ?>
				</footer>
				<?php endif; ?>
			</article>
			<?php endwhile; ?>
			<!-- ?php comments_template(); ? -->
		</main>
		<?php get_template_part( 'partials/sidebars/sidebar', 'single' ); ?>
	</div>
</div>
<?php get_footer(); ?>
