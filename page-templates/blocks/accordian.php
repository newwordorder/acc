<?php // FUll WIDTH

if (get_row_layout() == 'accordion') :

  $textBlock = get_sub_field('accordion_text_block');
$spaceBelow = get_sub_field('accordion_space_below');

?>



<div class="container space-below--<?php echo $spaceBelow ?>">
  <div class="row justify-content-center">
    <div class="col-md-12" id="accordion">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php echo $textBlock ?>
      </div>
    </div>
  </div>
</div>


<?php endif;

?>
