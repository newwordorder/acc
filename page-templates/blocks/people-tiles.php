<?php // people TILES

if (get_row_layout() == 'people_tiles') :

  $spaceBelow = get_sub_field('people_tiles_space_below');
$columns = get_sub_field('people_tiles_columns_per_row');
$sectiontitle = get_sub_field('people_tiles_title');
$line = get_sub_field('people_tiles_line');

?>


  <?php if (have_rows('people_tiles_column')) : $i = rand();
  ?>
    <div class="container space-below--<?php echo $spaceBelow ?>">
      <div class="row">
      <div class="col-md-12"><h5><? echo $sectiontitle ?></h5></div>

        <?php while (have_rows('people_tiles_column')) : the_row();
        $image = get_sub_field('image');
        $name = get_sub_field('name');
        $position = get_sub_field('position');
        $description = get_sub_field('description');

        ?>
        <div class="col-md-<?php echo $columns; ?> my-3" data-toggle="modal" data-target="#<?php echo $i; ?>">
            <div class="people-tile ">
            <div class="people-tile__image">
              <div class="background-image-holder">
                <img src="<?php echo $image['url'] ?>"/>
              </div>
            </div>
                <div class="people-tile__header">
                  <h6><?php echo $name ?></h6>
                  <p><?php echo $position ?></p>
                </div>
              </div>
                  <!-- Modal -->
              <div class="modal fade" id="<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                  <a class="btn btn--solid x" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>                      </a>  
                  <div class="row">
                    <div class="col-5">
                        <div class="background-image-holder">
                          <img src="<?php echo $image['url'] ?>"/>

                      </div>
                      </div>
                      <div class="col-7">
                      <div class="people-modal__text">
                        <h3><?php echo $name ?></h3>
                        <p class="lead"><?php echo $position ?></p>
                        <p><?php echo $description ?></p>

                        <p></p>
                      </div>
</div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <?php $i++;
        endwhile; ?>
      </div>

      <?php if ($line) : ?><hr /><?php endif; ?>
    </div>
  <?php endif; ?>

<?php endif; ?>
