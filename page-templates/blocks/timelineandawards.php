<?php // FEATURE TILES

if (get_row_layout() == 'timeline_and_awards') :

?>
<div class="timeline__selector">
    <div id="timeline" class="selector active"><h3>Timeline <i class="fal fa-calendar-alt"></i></h3></div>
    <div id="awards" class="selector"><h3><i class="fal fa-trophy"></i> Awards</h3></div>
</div>
    <?php if (have_rows('timeline_and_awards_timeline')) : ?>
        <div id="timeline--container" class="shelf active" >
        <?php while (have_rows('timeline_and_awards_timeline')) : the_row(); ?>
            <?php if (have_rows('sections')) : $id = 1; ?>
                <div class="timeline__daterange">    
                    <?php while (have_rows('sections')) : the_row(); ?>
                        <?php $date_range = get_sub_field('date-range') ?>
                        <div id="timeline_daterange--<?php echo $id; ?>" class="timeline__dates  <?php if ($id == 1) : echo 'active';
                                                                                                endif; ?>">
                            <h5><?php echo $date_range; ?></h5>
                        </div>
                    <?php 
                    $id++;
                    endwhile; ?>
                </div>
                <?php endif; ?>
                <?php if (have_rows('sections')) : $id_ = 1; ?>
                <?php while (have_rows('sections')) : the_row(); ?>

                            <div id="timeline_container--<?php echo $id_; ?>" class="container space-below--<?php echo $spaceBelow ?> timeline__section <?php if ($id_ == 1) : echo 'active';
                                                                                                                                                        endif; ?>" >
                                <div class="row">
                                <?php if (have_rows('event')) : ?>

                                    <?php while (have_rows('event')) : the_row(); ?>
                                        <?php 
                                        $title = get_sub_field('title__year');
                                        $image__ = get_sub_field('image');
                                        $text = get_sub_field('content');
                                        ?>
                                        <div class="col-md-4">
                                            <div class="feature-tile ">
                                                <div class="feature-tile__header">
                                                    <h3><?php echo $title ?></h3>
                                                </div>
                                                <div class="feature-tile__image">
                                                    <div class="background-image-holder">
                                                        <img src="<?php echo $image__ ?>" />
                                                    </div>
                                                </div>
                                                <div class="feature-tile__content">
                                                    <?php echo $text ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                            </div>
                <?php 
                $id_++;
                endwhile;
                ?>
            <?php endif; ?>
        <?php endwhile; ?>
            </div>
    <?php endif; ?>

    <?php if (have_rows('timeline_and_awards_awards')) : ?>
        <div id="awards--container" class="shelf" >
        <?php while (have_rows('timeline_and_awards_awards')) : the_row(); ?>
            <?php if (have_rows('sections')) : $id = 1; ?>
                <div class="timeline__daterange">    
                    <?php while (have_rows('sections')) : the_row(); ?>
                        <?php $date_range = get_sub_field('date-range') ?>
                        <div id="awards_daterange--<?php echo $id; ?>" class="timeline__dates  <?php if ($id == 1) : echo 'active';
                                                                                                endif; ?>">
                            <h5><?php echo $date_range; ?></h5>
                        </div>
                    <?php 
                    $id++;
                    endwhile; ?>
                </div>
                <?php endif; ?>
                <?php if (have_rows('sections')) : $id_ = 1; ?>
                <?php while (have_rows('sections')) : the_row(); ?>

                            <div id="awards_container--<?php echo $id_; ?>" class="container space-below--<?php echo $spaceBelow ?> timeline__section <?php if ($id_ == 1) : echo 'active';
                                                                                                                                                        endif; ?>" >
                                <div class="row">
                                <?php if (have_rows('event')) : ?>

                                    <?php while (have_rows('event')) : the_row(); ?>
                                        <?php 
                                        $title = get_sub_field('title__year');
                                        $image__ = get_sub_field('image');
                                        $text = get_sub_field('content');
                                        ?>
                                        <div class="col-md-4">
                                            <div class="feature-tile ">
                                                <div class="feature-tile__header">
                                                    <h3><?php echo $title ?></h3>
                                                </div>
                                                <div class="feature-tile__image">
                                                    <div class="background-image-holder">
                                                        <img src="<?php echo $image__['url'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="feature-tile__content">
                                                    <?php echo $text ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                            </div>
                <?php 
                $id_++;
                endwhile;
                ?>
            <?php endif; ?>
        <?php endwhile; ?>
            </div>
    <?php endif; ?>


<?php endif; ?>
