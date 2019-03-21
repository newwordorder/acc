<?php

/**
 * Template Name: Default Page
 *
 *
 * @package understrap
 */

get_header();

$headerType = get_field('image_or_video');

$text = get_field('text');

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
<?php

if (!empty($text)) : ?>

<section id="sub-header" class="page-header page-header--page <? if (empty($image)) : echo ' pb-0';
                                                              endif; ?>">

  <div class="container-fluid image-container">
  <div class="row flex-md-row-reverse">  
  <?php

  if (!empty($image)) :
  // vars
  $url = $image['url'];
  $alt = $image['alt'];

  ?>
      <div class="col-lg-5 pos-right header__image">
      <div class="background-image-holder ">
          <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
      </div>
          </div>
    <?php endif; ?>

  </div>
  </div>

<div class="container pt-10 pb-3">
      <div class="row ">
          <div class="  <? if (!empty($image)) : echo 'col-lg-6';
                        else : echo 'col-lg-9';
                        endif; ?> pt-5">
              <?php echo $text ?>
          </div>
      </div>
  </div>
  </section>

<?php endif; ?>


<?php get_template_part('page-templates/blocks'); ?>

<?php get_footer();
