<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<header class="header">
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php get_search_form(); ?>
</div>
</article>
<?php endif; ?>
<?php get_footer(); ?>