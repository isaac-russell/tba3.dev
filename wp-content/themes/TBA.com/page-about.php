<?php
/**
 * Template Name: About
 * Description: about
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-about.twig' ), $context );