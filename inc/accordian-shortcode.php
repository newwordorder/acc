<?php 

/* FAQ
-------------------------------------------------- */

    // Add Shortcode
function faq_shortcode($atts, $content = null)
{

        // Attributes
    extract(shortcode_atts(

        array(

            'class' => '',
            'type' => '',
            'question' => '',
            'id' => '',
            'open' => ''

        ),

        $atts
    ));

    if ($open == 'true') {

        $out .= '<div class="panel panel-default">';
        $out .= '<div class="panel-heading" role="tab" id="headingOne">';
        $out .= '<a role="button" data-toggle="collapse"  href="#' . $id . '" aria-expanded="true" aria-controls="collapseOne" class="accordian-toggle " >';
        $out .= '<h3 class="panel-title">';
        $out .= $question;
        $out .= '</h3>';
        $out .= '<i class="far fa-plus js-rotate-if-collapsed"></i></a>';
        $out .= '';
        $out .= '</div>';
        $out .= '<div id="' . $id . '" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">';
        $out .= '<div class="panel-body">';
        $out .= do_shortcode($content);
        $out .= '</div>';
        $out .= '</div>';
        $out .= '<hr />';
        $out .= '</div>';


    } else {
        $out .= '<div class="panel panel-default">';
        $out .= '<div class="panel-heading" role="tab" id="headingOne">';
        $out .= '<a role="button" data-toggle="collapse"  href="#' . $id . '" aria-expanded="false" aria-controls="collapseOne" class="accordian-toggle collapsed " >';
        $out .= '<h3 class="panel-title">';
        $out .= $question;
        $out .= '</h3>';
        $out .= '<i class="far fa-plus js-rotate-if-collapsed"></i></a>';
        $out .= '';
        $out .= '</div>';
        $out .= '<div id="' . $id . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">';
        $out .= '<div class="panel-body">';
        $out .= do_shortcode($content);
        $out .= '</div>';
        $out .= '</div>';
        $out .= '<hr />';
        $out .= '</div>';

    }


    return $out;

}

add_shortcode('faq', 'faq_shortcode');