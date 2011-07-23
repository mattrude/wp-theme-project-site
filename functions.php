<?php

/********************************************************************************
  Add Custom Navigation Menu for WordPress 3.0
*/

add_theme_support( 'nav-menus' );
if ( ! get_term_by( 'name', 'Header Navigation Menu', 'nav_menu' ) ) {
  echo "Creating Header Navigation Menu<br />";
  wp_create_nav_menu('Header Navigation Menu');
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'header' => __( 'The Header Navigation Menu' ),
) );

function milly_nav_fallback() { ?>
			<div class="menu-header-navigation-menu-container"> 
				<ul id="menu" class="menu"> 
					<li><a href="/">Home</a></li> 
					<li><a href="/about/">About</a></li> 
					<li><a href="/documentation/">Docs</a></li> 
					<li><a href="/blog/">Blog</a></li> 
					<li><a href="/forums/">Forums</a></li> 
					<li><a class="download" href="https://github.com/mattrude/wp-theme-kirby/downloads">Download</a></li> 
				</ul> 
			</div><?php
}

?>
