<?php // FEATURE TILES

if( get_row_layout() == 'feature_tiles' ):

  $spaceBelow = get_sub_field('feature_tiles_space_below');
  $columns = get_sub_field('feature_tiles_columns_per_row');
  $sectiontitle = get_sub_field('feature_tiles_title')
?>


  <?php if( have_rows('feature_tiles_column') ): ?>
    <div class="container space-below--<?php echo $spaceBelow ?>">
      <div class="row">
      <div class="col-md-12"><h5><?echo $sectiontitle?></h5></div>

        <?php while( have_rows('feature_tiles_column') ): the_row();
          $title = get_sub_field('title');
          $text = get_sub_field('text_block');
        ?>
        <div class="col-md-<?php echo $columns; ?> ">
            <div class="feature-tile ">
                <div class="feature-tile__header">
                  <h6><?php echo $title ?></h6>
                </div>
                <div class="feature-tile__content">
                  <?php echo $text ?>
                  </div>
              </div>
            </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

<?php endif; ?>
