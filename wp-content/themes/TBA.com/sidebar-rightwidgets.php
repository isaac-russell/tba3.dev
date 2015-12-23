<?php
/**
 * The Template for displaying rightwidgets on every page needed. 
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 */

// Getting the widgets from what we registered in widgets.php
// 'rightside-widget' needs to match the widget 'id'
$data['rightside_widgets'] = Timber::get_widgets('rightside-widget');


// Send that data to the rightside-widgets.twig and to display that, you have to include rightside-widgets.twig in the page you want it to display in.

Timber::render( array( 'rightside-widgets.twig' ), $data );




/*

1. registering widgets/sidebar in lib/widgets.php (Model)
2. hook that registration into WP when it runs (functions.php) (Model)
3. get the widget data inside of sidebar.php (Controller)
4. render the markup which can happen in two ways: (View)

Option 1: render that data to a specific file (View stage)
	Inside sidebar.php you have the render() to sidebar.twig (or whatever)

Option 2: make the data globally available (View stage)
	Inside functions.php create a context variable calling get_sidebar('sidebar.php')

*/


