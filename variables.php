<?php 

    // eye catche
    $thumbnail_image = $thumbnail_image_sm = $thumbnail_image_square = null;
    if ( has_post_thumbnail() ) {
        $thumbnail_image_id = get_post_thumbnail_id();
        list($thumbnail_image,) = wp_get_attachment_image_src( $thumbnail_image_id , 'normal');
        list($thumbnail_image_sm,) = wp_get_attachment_image_src( $thumbnail_image_id , 'normal-sm');
        list($thumbnail_image_square,) = wp_get_attachment_image_src( $thumbnail_image_id , 'square');
    }
    // If no eye-catcher is included, when entering a specific image instead of null
    if(!$thumbnail_image) $thumbnail_image = get_template_directory_uri().'/dist/images/thumbnail-normal.jpg';
    if(!$thumbnail_image_sm) $thumbnail_image_sm = get_template_directory_uri().'/dist/images/thumbnail-normal-sm.jpg';
    if(!$thumbnail_image_square) $thumbnail_image_square = get_template_directory_uri().'/dist/images/thumbnail-square.jpg';
    
    // Custom post for non-image
    /*
    $post_custom_data = get_post_meta(get_the_id(), 'custom_data', true);
    */

    // When registering images in a custom post.
    /*
    $post_custom_image_id = get_post_meta(get_the_id(), 'carousel_image', true);
    $post_custom_image = $post_custom_image_square = null;
    if ( $post_custom_image_id ) {
        list($post_custom_image,) = wp_get_attachment_image_src( $post_custom_image_id , 'normal');
        list($post_custom_image_square,) = wp_get_attachment_image_src( $post_custom_image_id , 'square');
    }
    */
    
?>