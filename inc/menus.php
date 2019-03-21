<?php 
function register_my_menus()
{
  register_nav_menus(
    array(
      'business-menu' => __('Business Menu'),
      'capability-menu' => __('Capability Menu'),
      'people-menu' => __('People Menu'),
      'contact-menu' => __('Contact Menu')
    )
  );
}
add_action('init', 'register_my_menus');
?>