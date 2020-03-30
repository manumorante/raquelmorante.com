<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div class="content content-home">
    <div class="gen-list">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
                <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail');  ?></a>
				</div>
                <a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo the_title_attribute('echo=0'); ?>"><?php the_title(); ?></a>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
		</div>

	<?php endif; ?>
    <div class="clear"></div>
    </div>

	</div>

<?php get_sidebar(); ?>
    <div class="clear"></div>
<?php get_footer(); ?>
