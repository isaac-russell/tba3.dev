<?php
/**
 * Template Name: Food Categories
 *
 * Description: An archive listing a few posts from each term in the Recipes Type taxonomy
 *
 */
$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
// Get the terms from the recipe_type post
$context['types'] = Timber::get_terms('food_type');
Timber::render( array( 'page-foodcategories.twig', 'page.twig' ), $context );