<?php 
    function is_sub_page($title){

        $page = get_page_by_title($title);
        $currentPage = get_the_ID();

        $args = array(
            'post_parent' => $page->ID,
            'post_type'   => 'page', 
        );

        $children = get_children( $args );
        $IDs = array();
        array_push($IDs, $page->ID);

        forEach ($children as &$child) {
            array_push($IDs, $child->ID);
        };

        if (in_array($currentPage, $IDs)) {
            return true;
        } else {
            return false;
        }
    }
?>