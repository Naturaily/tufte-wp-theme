<?php get_header(); ?>

        <div id="container">
            <div id="content">

				<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
					</div><!-- .entry-utility -->

					<div class="entry-utility">
					                    <?php printf( __( 'This entry was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'hbd-theme' ),
					                        get_the_category_list(', '),
					                        get_the_tag_list( __( ' and tagged ', 'hbd-theme' ), ', ', '' ),
					                        get_permalink(),
					                        the_title_attribute('echo=0'),
					                        comments_rss() ) ?>

					<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Comments and trackbacks open ?>
					                        <?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'hbd-theme' ), get_trackback_url() ) ?>
					<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Only trackbacks open ?>
					                        <?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'hbd-theme' ), get_trackback_url() ) ?>
					<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Only comments open ?>
					                        <?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'hbd-theme' ) ?>
					<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
					                        <?php _e( 'Both comments and trackbacks are currently closed.', 'hbd-theme' ) ?>
					<?php endif; ?>
					<?php edit_post_link( __( 'Edit', 'hbd-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
                </div><!-- #post-<?php the_ID(); ?> -->

                <div id="nav-below" class="navigation">
						<?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?> <span style="color: #bbb;">&#8226;</span> <?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?>
				</div><!-- #nav-below -->
        <div class="single-post-socials">

            <a href="javascript:fbShare('<?php the_permalink();?>', '<?php the_title(); ?>', 520, 350)">
              <img src="<?php echo get_bloginfo('template_url')?>/img/fb2.png"/>
            </a>

           <!--  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" target="_blank" width="400" height: "300px">
              <img src="<?php echo get_bloginfo('template_url')?>/img/li2.png"/>
            </a> -->
            <a class="icon-linkedin" rel="nofollow"
                href="http://www.linkedin.com/"
                onclick="popUp=window.open(
                    'http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>',
                    'popupwindow',
                    'scrollbars=yes,width=520,height=350');
                popUp.focus();
                return false">
                <img src="<?php echo get_bloginfo('template_url')?>/img/li2.png"/>
            </a>

            <a class="icon-twitter" rel="nofollow"
              href="http://twitter.com/"
              onclick="popUp=window.open(
                  'http://twitter.com/intent/tweet?text=\'<?php the_title(); ?>\' <?php the_permalink(); ?>',
                  'popupwindow',
                  'scrollbars=yes,width=520,height=350');
              popUp.focus();
              return false">
              <img src="<?php echo get_bloginfo('template_url')?>/img/tw2.png"/>
            </a>
            <a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-lang="en"></a>
            <script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
        </div>

 				<?php comments_template('', true); ?>

            </div><!-- #content -->
        </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
