<?php

	$args = array(
		'id'            => 'footer-widget',
		'class'         => 'widget',
		'name'          => __( 'Footer far left', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
	$args = array(
		'id'            => 'footer-widgetmidleft',
		'class'         => 'widget',
		'name'          => __( 'Footer middle left', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
	$args = array(
		'id'            => 'footer-widgetmidright',
		'class'         => 'widget',
		'name'          => __( 'Footer middle right', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
	$args = array(
		'id'            => 'footer-widgetfarright',
		'class'         => 'widget',
		'name'          => __( 'Footer far right', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'rightside-widget',
		'class'         => 'widget',
		'name'          => __( 'rightside-widget', 'tba' ),
		'description'   => __( 'A custom sidebar', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
