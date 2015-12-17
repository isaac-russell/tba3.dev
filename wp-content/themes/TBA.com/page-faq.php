<?php
/**
 * Template Name: faq
 * Description: faq
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-faq.twig' ), $context );