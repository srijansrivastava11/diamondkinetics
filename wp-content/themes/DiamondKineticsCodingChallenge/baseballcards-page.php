<?php
/*
 * Template Name: Base Ball Cards
 */
 $context          = Timber::context();
 $context['posts'] = new Timber\PostQuery();
 $args = array(
    'post_type'=> 'cards',
    'order'    => 'ASC'
);
$context['card_posts'] = get_posts($args);

foreach ($context['card_posts'] as $key => $value) {
  $context['card_posts'][$key]->fields = get_fields($value->ID);
}
 $templates        = array( 'baseball.twig' );
 Timber::render( $templates, $context );
