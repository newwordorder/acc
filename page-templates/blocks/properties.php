<?php // FEATURE TILES

if (get_row_layout() == 'properties') :

?>
    <div class="container properties">

    <?php if (have_rows('properties_properties')) : ?>
        <?php $tab = 1; ?>
        <div id="properties--container" class="properties__container">
        <?php while (have_rows('properties_properties')) : the_row(); ?>
                <div class="properties__daterange <?php if ($tab == 1) : echo 'active';
                                                    endif; ?>" id='tab--<?php echo $tab; ?>'> 
                        <?php $property_type = get_sub_field('property_type') ?>
                        <div id="properties_daterange--<?php echo $id; ?>" class="properties__dates  <?php if ($id == 1) : echo 'active';
                                                                                                    endif; ?>">
                            <h6><?php echo $property_type; ?></h6>
                        </div>
                </div>
        <?php
        $tab++;
        endwhile; ?>
        <?php endif; ?>

            </div>
            <?php $row = 1; ?>

        <?php while (have_rows('properties_properties')) : the_row(); ?>
            <div class="row pt-5 properties__row <?php if ($row == 1) : echo 'active';
                                                endif; ?> " id="row--<?php echo $row; ?>">
                <div class="col-md-4">
                <div class='location__list--box'>
           <ul class="location__list " id="location__list--<?php echo $row; ?>">
            <?php if (have_rows('locations')) : ?>
                <?php $itemID = 1; ?>
                    <?php while (have_rows('locations')) : the_row(); ?>
                        <?php $title = get_sub_field('title'); ?>
                                <li class="<?php if ($itemID == 1) : echo 'active';
                                            endif; ?>" id="row__<?php echo $row; ?>__name--<?php echo $itemID; ?>"><h5><?php echo $title; ?></h5></li>
                    <?php $itemID++;
                    endwhile; ?>
                <?php endif; ?>
            </ul>
                </div>
        
            </div>
          <div class="col-md-4 align-items-center  d-flex">
              <div class="svg--container">
          <svg viewBox="0 0 565 800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Artwork" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="outer" transform="translate(1.000000, 0.000000)">
                    <polygon id="Fill-1" fill="#002A53" points="189.569642 0 170.682768 11.0644391 147.734797 74.1937947 162.980621 85.5140811 148.590167 97.9054893 138.125251 136.849642 143.118091 193.042482 108.007828 289.250597 74.4116468 303.816706 41.1247733 285.722196 35.9868258 266.631026 0.000190930788 256.053461 0.487064439 639.826253 122.140525 639.826253 122.140525 774.543198 385.689928 791.06253 411.721432 772.324582 471.251742 777.601909 491.314749 799.131265 517.180143 775.946539 554.062243 770.163246 563.849356 753.493079 544.206396 743.818616 557.012124 728.519332 561.287064 682.375179 550.058425 659.045346 522.848878 603.654415 493.682291 576.521241 481.510453 568.051551 486.365823 538.205251 460.110931 509.481623 442.701862 520.494511 434.806874 465.890215 416.227399 444.307399 421.565823 427.793795 322.810692 363.110263 326.297088 336.284487 315.601146 327.763246 321.05031 314.214797 301.455084 264.484964 297.46463 194.905967 266.554845 160.41432 234.172983 167.511217 218.167255 93.9169451 214.144344 64.3875895 199.001623 56.0324582"></polygon>
                        <g class="enclosing" transform="translate(0.000000, 346.625298)">
                     
                            <?php if (have_rows('locations')) : ?>
                            <?php $location = 1; ?>
                                <?php while (have_rows('locations')) : the_row(); ?>
                                    <?php $svg = get_sub_field('svg'); ?>
                                            <g id="row__<?php echo $row; ?>__g--<?php echo $location; ?>" class="group <?php if ($location == 1) : echo 'active';
                                                                                                                        endif; ?>">
                                            <?php echo $svg; ?>  
                                            </g>
                                <?php $location++;
                                endwhile; ?>
                            <?php endif; ?>
                  
                    </g>
                </g>
            </g>
            </svg>
         </div>
    </div>
    <div class="col-md-4 align-items-center  d-flex">
        <?php $detailsID = 1; ?>
        <?php while (have_rows('locations')) : the_row(); ?>

                <?php $details = get_sub_field('details'); ?>
                    <div class='details__box <?php if ($detailsID == 1) : echo 'active';
                                            endif; ?>' id="row__<?php echo $row; ?>__details--<?php echo $detailsID; ?>">
                        <?php echo $details; ?>
            </div>
            <?php $detailsID++;
            endwhile; ?>
    </div>
    </div>
        <?php $row++;
        endwhile; ?>

    </div>
<?php endif; ?>
