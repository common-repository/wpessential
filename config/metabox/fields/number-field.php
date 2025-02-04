<?php

use WPEssential\Plugins\Panel\Fields\Number;

return [
	'section'  => 'number_field',
	'controls' => [
		Number::make( __( 'Number field', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with clear icon', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->default( 4 )
			  ->clearable( true )
			  ->toArray(),
		Number::make( __( 'Number field with disable', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->default( 4 )
			  ->disabled( true )
			  ->toArray(),
		Number::make( __( 'Number field with large size', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->size( 'large' )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with medium size', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->size( 'medium' )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with small size', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->size( 'small' )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with mini size', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->size( 'mini' )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with info', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->default( 4 )
			  ->note_title( __( 'WPE ', 'wpessential' ) )
			  ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
			  ->toArray(),
		Number::make( __( 'Number field with max number', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->max( 50 )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with min number', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->min( 3 )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with step number', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->step( 0.1 )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with step-strictly number', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->step_strictly( true )
			  ->step( 0.1 )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with precision number', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->precision( 4 )
			  ->step( 0.1 )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with number controls', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->controls( false )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with number controls position right', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->controls_position( 'right' )
			  ->default( 4 )
			  ->toArray(),
		Number::make( __( 'Number field with number controls position default', 'wpessential' ) )
			  ->subtitle( __( 'Field Subtitle' ) )
			  ->description( __( 'Field description' ) )
			  ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			  ->default( 4 )
			  ->toArray()
	]
];
