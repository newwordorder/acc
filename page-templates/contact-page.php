<?php

/**
 * Template Name: Contact Page
 *
 *
 * @package understrap
 */

get_header();

$headerType = get_field('image_or_video');

$image = get_field('background_image');
$imageOverlay = get_field('image_overlay');

$backgroundImage = get_field('background_image');

$image = $backgroundImage['background_image'];
$imageOverlay = $backgroundImage['image_overlay'];
$backgroundEffect = $backgroundImage['background_effect'];
$invertColours = $backgroundImage['invert_colours'];

$video = get_field('youtube_code');
$fallbackImage = get_field('fallback_image');
?>

<div class="container">
  <div class="contact__page">
    <div class="contact__left pt-10">
      <?php get_template_part('page-templates/blocks'); ?>
    </div>
    <div class="contact__right">
      <section class="space--lg">
      <?php echo get_field('contact_form'); ?>
</section>
    </div>
  </div>
</div>
<?php get_footer();
