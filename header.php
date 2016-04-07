<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <title>
    <?php
      if ( is_single() ) { single_post_title(); }
      elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
      elseif ( is_page() ) { single_post_title(''); }
      elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
      elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
      else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?>
  </title>

  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_enqueue_script("jquery"); ?>

  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
  <article>
  <div class="theme-sidebar">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </div>
  <aside id="blogAside" class="blog-aside">
    <div id="asideInfo" class="aside-info">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h4>
        <span class="position">
          CEO at
        </span>
        <a class="company" href="http://naturaily.com">Naturaily</a>
      </h4>

      <?php #wp_page_menu( 'sort_column=menu_order' ); ?>
      <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
      <div class="socials">
        <a href="https://www.facebook.com/marcin.sulikowski.5?fref=ts" target="_blank">
          <img src="<?php echo get_bloginfo('template_url')?>/img/fb.png"/>
        </a>
        <a href="https://twitter.com/suler" target="_blank">
          <img src="<?php echo get_bloginfo('template_url')?>/img/tw.png"/>
        </a>
        <a href="https://www.linkedin.com/in/marcinsulikowski?trk=pulse-det-athr_prof-art_hdr" target="_blank">
          <img src="<?php echo get_bloginfo('template_url')?>/img/li.png"/>
        </a>
      </div>
    </div>




  </aside>
  <div id="wrapper" class="hfeed blog-wrapper">
    <div id="header">
      <button id="sidebarToggler" class="sidebar-toggler">Toggle</button>
      <div class="blog-top">
        <div class="author-avatar">
          <img src="<?php echo get_bloginfo('template_url')?>/img/marcin.png"/>
        </div>
      </div>
      <!-- <div class="blog-title">
        <?php if (is_front_page() && is_home()): ?>
          <h1><a href="<?php echo esc_url(home_url('/'));?>" rel="home"><?php bloginfo('name');?></a></h1>
        <?php else: ?>
          <h1><a href="<?php echo esc_url(home_url('/'));?>" rel="home"><?php bloginfo('name');?></a></h1>
        <?php endif;

        $description = get_bloginfo('description', 'display');
        if ($description || is_customize_preview()): ?>
          <p class="subtitle">
            <?php echo $description;?>
          </p>
        <?php endif;?>
        <button class="secondary-toggle"><?php _e('Menu and widgets', 'twentyfifteen');?></button>
      </div> -->
      <div id="access">
	<!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'hbd-theme' ) ?>"><?php _e( 'Skip to content', 'hbd-theme' ) ?></a></div>-->

      </div><!-- #access -->

    </div><!-- #header -->

    <div id="main" class="main">
