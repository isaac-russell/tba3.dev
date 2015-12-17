<?php
/**
 * Template Name: Contact
 * Description: contact
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-contact.twig' ), $context );