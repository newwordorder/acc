<?php // FEATURE COLUMNS

if (get_row_layout() == 'overlapping_columns') :

    $spaceBelow = get_sub_field('overlapping_columns_space_below');
$columns = get_sub_field('overlapping_columns_columns_per_row');

?>

  <?php if (have_rows('overlapping_columns_column')) : ?>
    <div class="container space-below--<?php echo $spaceBelow ?>">
      <div class="row">
        <?php while (have_rows('overlapping_columns_column')) : the_row();

        $text = get_sub_field('text_block');
        $image = get_sub_field('image');
        $icon = get_sub_field('icon');

        ?>

        <div class="col-md-<?php echo $columns; ?> overlapping-column">

          <div>
              <?php echo $text ?>

              <?php get_template_part('page-templates/blocks/block-partials/buttons'); ?>

 
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
                <img class="overlapping-column__image" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
              <?php endif; ?>

            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

<?php endif; ?>
