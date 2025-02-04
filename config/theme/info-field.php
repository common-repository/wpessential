<?php

use WPEssential\Plugins\Panel\Fields\Info;
use WPEssential\Plugins\Panel\Section;

return Section::make( __( 'Info', 'wpessential' ), 'info_field' )
              ->description( __( 'Info fields examples.', 'wpessential' ) )
              ->icon_type( 'icon' )
              ->icon( 'location' )
              ->note_desc( __( 'Info fields examples.', 'wpessential' ) )
              ->note_icon( 'location' )
              ->note_title( 'Info' )
              ->priority( 10 )
              ->controls( [
	              Info::make( __( 'Info field', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->toArray(),
	              Info::make( __( 'Info field with align center', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->align( 'center' )
	                  ->toArray(),
	              Info::make( __( 'Info field with close icon', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->closable( true )
	                  ->toArray(),
	              Info::make( __( 'Info field with close text', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->closable( true )
	                  ->close_text( 'Click Me' )
	                  ->toArray(),
	              Info::make( __( 'Info field with icon', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->show_icon( true )
	                  ->toArray(),
	              Info::make( __( 'Info field with warning', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->alert_type( 'warning' )
	                  ->toArray(),
	              Info::make( __( 'Info field with info', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->alert_type( 'info' )
	                  ->toArray(),
	              Info::make( __( 'Info field with error', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->alert_type( 'error' )
	                  ->toArray(),
	              Info::make( __( 'Info field in dark mod', 'wpessential' ) )
	                  ->subtitle( __( 'Field Subtitle' ) )
	                  ->description( __( 'Field description' ) )
	                  ->effect( 'dark' )
	                  ->toArray()
              ] )
              ->toArray();
