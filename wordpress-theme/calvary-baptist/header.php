<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav>
  <a class="logo" href="<?php echo esc_url( home_url('/') ); ?>">
    <img src="<?php echo esc_url( get_theme_mod( 'calvary_logo', 'https://calvarybaptistchurchmedford.org/wp-content/uploads/2026/05/img_00_05f3ecae.png' ) ); ?>"
         alt="<?php bloginfo('name'); ?>"
         style="height:64px;width:64px;object-fit:cover;border-radius:50%;">
  </a>

  <div class="nlinks" id="nlinks">
    <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => false,
      'items_wrap'     => '%3$s',
      'walker'         => new Calvary_Nav_Walker(),
    ) ); ?>
  </div>

  <div class="nctas">
    <a class="bvis" href="<?php echo esc_url( get_permalink( get_page_by_path('contact') ) ); ?>">Plan a Visit</a>
    <a class="bgiv" href="<?php echo esc_url( get_permalink( get_page_by_path('give') ) ); ?>">Give</a>
  </div>

  <button class="hmb" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </button>
</nav>

<main>
<?php

class Calvary_Nav_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
        $is_active = in_array( 'current-menu-item', $classes );
        $class     = 'nl' . ( $is_active ? ' on' : '' );
        $output   .= '<a class="' . esc_attr( $class ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
    }
}
