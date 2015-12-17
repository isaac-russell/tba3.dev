<?php
/**
 * The Template for displaying all single posts
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 */

// Getting the widgets from what we registered in widgets.php
// 'footer-widget' needs to match the widget 'id'
$data['footer_widgets'] = Timber::get_widgets('footer-widget');
$data['rightside_widgets'] = Timber::get_widgets('rightside-widget');

// Send that data to sidebar.twig and to display that, you have to include sidebar.twig
Timber::render( array( 'sidebar.twig' ), $data );


/*

1. registering widgets/sidebar in lib/widgets.php (Model)
2. hook that registration into WP when it runs (Model)
3. get the widget data inside of sidebar.php (Controller)
4. render the markup which can happen in two ways: (View)

Option 1: render that data to a specific file (View stage)
	Inside sidebar.php you have the render() to sidebar.twig (or whatever)

Option 2: make the data globally available (View stage)
	Inside functions.php create a context variable calling get_sidebar('sidebar.php')

*/


