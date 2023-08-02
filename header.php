<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <header class="site-header container mx-auto">
    <nav class="nav-menu bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </span>
        <button type="button" class="dashicons dashicons-menu inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700',
              'fallback_cb' => false
            ));
          ?>
        </div>
      </div>
    </nav>
  </header>