<?php get_header(); ?>
<div id="container">

    <div id="content">
		<?php /* Top post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

		<?php } ?>

		<?php /* The Loop — with comments! */ ?>
		<?php while ( have_posts() ) : the_post() ?>

		<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
		                <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php /* an h2 title */ ?>
                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( '', 'hbd-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
		                    <h1 class="entry-title">
                          <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                          <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h1>

		<?php /* Microformatted, translatable post meta */ ?>
		                    <div class="entry-meta">
		                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'hbd-theme'); ?></span>
		                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
		                        <span class="meta-sep"> | </span>
		                        <span class="meta-prep meta-prep-entry-date"><?php _e('', 'hbd-theme'); ?></span>
		                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
		                    </div><!-- .entry-meta -->

		<?php /* The entry content */ ?>
		                    <div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
		<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
		                    </div><!-- .entry-content -->

		<?php /* Microformatted category and tag links along with a comments link */ ?>
		                    <div class="entry-utility">
		                        <span class="meta-sep"> | </span>
		                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'hbd-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
		                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hbd-theme' ), __( '1 Comment', 'hbd-theme' ), __( '% Comments', 'hbd-theme' ) ) ?></span>
		                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
		                    </div><!-- #entry-utility -->
		                </section><!-- #post-<?php the_ID(); ?> -->

		<?php /* Close up the post div and then end the loop with endwhile */ ?>

		<?php endwhile; ?>

		<?php /* Bottom post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		                <div id="nav-below" class="navigation">
		                    <?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?> <span style="color: #bbb;">&#8226;</span> <?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?>
		                </div><!-- #nav-below -->

		<?php } ?>
    </div><!-- #content -->

	<?php get_sidebar(); ?>

</div><!-- #container -->

<?php get_footer(); ?>
