<?php // FEATURE COLUMNS

if (get_row_layout() == 'overlapping_columns') :

  $spaceBelow = get_sub_field('overlapping_columns_space_below');
$columns = get_sub_field('overlapping_columns_columns_per_row');

?>

  <?php if (have_rows('overlapping_columns_column')) : ?>
    <div class="container space-below--<?php echo $spaceBelow ?>">
      <div class="row justify-content-center">
        <?php while (have_rows('overlapping_columns_column')) : the_row();

        $text = get_sub_field('text_block');
        $image = get_sub_field('image');
        $icon = get_sub_field('icon');
        $link = get_sub_field('link');

        ?>

        <div class="col-md-4 col-lg-<?php echo $columns; ?> overlapping-column">
          <a href="<?php echo $link; ?>" style="display:block">
              <?php echo $text ?>
 
              <?php
              if (!empty($image)) :

                // vars
              $url = $image['url'];
              $alt = $image['alt'];

              $size = '600x400';
              $thumb = $image['sizes'][$size];
              $width = $image['sizes'][$size . '-width'];
              $height = $image['sizes'][$size . '-height'];

              ?> 
              <div class="overlapping-column__image">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
              </div>
                <?php endif; ?>

              </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

<?php endif; ?>
