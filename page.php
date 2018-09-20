<?php get_header(); ?>
<h1>PAGE.PHP</h1>

<main id="content" class="mainContent" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<div class="wrapLg pageWrapper">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section class="pageContent">
					<?php the_content(); ?>
				</section> <?php // end article section ?>

			<?php endwhile; endif; ?>


		</div>

</main>

<?php get_footer(); ?>
