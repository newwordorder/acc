<?php

/**
 * Template Name: Home
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

<section id="sub-header"

class="page-header page-header--home"
data-overlay="<?php echo $imageOverlay ?>"
>


<?php $slides = get_field('slides'); ?>
      <div class='swiper-container'>
        <div class="swiper-wrapper">
        <?php while (have_rows('slides')) : the_row();
        $text = get_sub_field('text');
        $color = get_sub_field('text_color');
        $image = get_sub_field('image');

        ?>
          <div class="swiper-slide <?php echo $color; ?>">
          <div class="background-image-holder">
            <img src="<?php echo $image['url'] ?>" />
          </div>
          <div class="container">
              <?php echo $text; ?>
          </div>
          </div>
          <? endwhile; ?>
        </div>
        <!-- If we need pagination -->
      <div id="pagination" class="swiper-pagination"></div>

    </div>


</section>




<?php get_template_part('page-templates/blocks'); ?>

<?php 

$images = get_field('images');
$imageArray = array();

while (have_rows('images')) : the_row();
$image = get_sub_field('image');
array_push($imageArray, $image['url']);
endwhile;
?>


<script>

  var displacement = ['<?php bloginfo('template_directory'); ?>' + '/img/20.jpg'];

  var images = <?php echo json_encode($imageArray); ?>;

  var slide1 = new sliderEffect({
      parent: document.querySelector('.slider'),
      intensity: 0.2,
      images: images,
      displacements: displacement,
      slides: document.querySelectorAll('.slide'),
      hover: false,
      line: document.querySelector('.line')
  });


</script>


<?php get_footer();