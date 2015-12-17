<?php

	$args = array(
		'id'            => 'footer-widget',
		'class'         => 'widget',
		'name'          => __( 'Footer', 'tba' ),
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
