<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Builders\Fields\Helper\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait Callback
{
	/**
	 * Set the callback to be used for determining the editor type.
	 *
	 * @param string $callback
	 *
	 * @return Callback
	 */
	public function editor ( string $callback = 'wordpress' )
	{
		$this->editor = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the common key.
	 *
	 * @param string $callback
	 *
	 * @return Callback
	 */
	public function common_key ( string $callback = 'wordpress' )
	{
		$this->common_key = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dependency.
	 *
	 * @param array $callback
	 *
	 * @return Callback
	 */
	public function dependent ( array $callback )
	{
		$this->dependent = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dependency.
	 *
	 * @param array $callback
	 *
	 * @return Callback
	 */
	public function dependency ( array $callback )
	{
		$this->dependency = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor panel classes.
	 *
	 * @param string $callback
	 *
	 * @return Callback
	 */
	public function add_classes ( string $callback )
	{
		$this->add_classes = wp_parse_args( $callback, $this->add_classes );

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor separator.
	 *
	 * @param string $callback
	 *
	 * @return Callback
	 */
	public function separator ( string $callback )
	{
		$this->separator = $callback;

		return $this;
	}

	/**
	 * Set the HTML tag name where Visual Composer will store attribute value in WPBakery Page Builder edit mode.
	 * Default: hidden input
	 *
	 * @param string $callback
	 *
	 * @return Callback
	 */
	public function holder ( string $callback )
	{
		$this->holder = $callback;

		return $this;
	}

	/**
	 * Set the params within groups (tabs)
	 *
	 * @param string $callback
	 *
	 * @return Callback
	 */
	public function group ( string $callback )
	{
		$this->group = $callback;

		return $this;
	}

	/**
	 * Set the field size
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function field_size ( string $callback )
	{
		$this->field_size = $callback;

		return $this;
	}

	/**
	 * Set the value of param in WPBakery Page Builder editor
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function admin_label ( bool $callback )
	{
		$this->admin_label = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dynamic.
	 *
	 * @param bool  $callback
	 * @param mixed $callback
	 *
	 * @return $this
	 */
	public function dynamic ( bool $callback, $default = '', $category = [] )
	{
		$this->dynamic = [ 'active' => $callback ];
		if ( $default ) {
			$this->dynamic = wp_parse_args( $this->dynamic, [ 'default' => $default ] );
		}

		if ( ! empty( $default ) ) {
			$this->dynamic = wp_parse_args( $this->dynamic, [ 'category' => $category ] );
		}

		return $this;
	}

	/**
	 * Get the component name for the field.
	 *
	 * @return string
	 */
	public function type ()
	{
		return $this->type;
	}

	/**
	 * Set the callback to be used for determining the field's key value.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function key ( string $callback )
	{
		$this->key = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's description value.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function desc ( string $callback )
	{
		$this->description = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's short description value.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function subtitle ( string $callback )
	{
		$this->subtitle = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's placeholder value.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function placeholder ( string $callback )
	{
		$this->placeholder = $callback;

		return $this;
	}

	/**
	 * Set the minimum number (only affects the spinners, the user can still type a lower value).
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function min ( $callback )
	{
		$this->min = $callback;

		return $this;
	}

	/**
	 * Set the maximum number (only affects the spinners, the user can still type a higher value).
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function max ( $callback )
	{
		$this->max = $callback;

		return $this;
	}

	/**
	 * Set the intervals value that will be incremented or decremented when using the controls’ spinners. Default is
	 * empty, the value will be incremented by 1.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function step ( $callback )
	{
		$this->step = $callback;

		return $this;
	}

	/**
	 * The clearable of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function clearable ( $callback )
	{
		$this->clearable = $callback;

		return $this;
	}

	/**
	 * The filterable of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function filterable ( $callback )
	{
		$this->filterable = $callback;

		return $this;
	}

	/**
	 * The reserve_keyword of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function reserve_keyword ( $callback )
	{
		$this->reserve_keyword = $callback;

		return $this;
	}

	/**
	 * The multiple of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function multiple ( $callback )
	{
		$this->multiple = $callback;

		return $this;
	}

	/**
	 * The multiple limit of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function multiple_limit ( $callback )
	{
		$this->multiple_limit = $callback;

		return $this;
	}

	/**
	 * The predefine color.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function predefine ( $callback )
	{
		$this->predefine = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's array of key => value pairs: [ 'key' => 'value', ... ].
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function options ( $callback )
	{
		$this->options = $callback;

		return $this;
	}

	/**
	 * The note icon of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function note_icon ( $callback )
	{
		$this->note_icon = $callback;

		return $this;
	}

	/**
	 * The note title of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function note_title ( $callback )
	{
		$this->note_title = $callback;

		return $this;
	}

	/**
	 * The note description of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function note_desc ( $callback )
	{
		$this->note_desc = $callback;

		return $this;
	}

	/**
	 * The word limit show of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function word_limit_show ( $callback )
	{
		$this->word_limit_show = $callback;

		return $this;
	}

	/**
	 * The readonly of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function readonly ( $callback )
	{
		$this->readonly = $callback;

		return $this;
	}

	/**
	 * The disabled of the field.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function disabled ( $callback )
	{
		$this->disabled = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's label_block value.
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function label_block ( bool $callback )
	{
		$this->label_block = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's available CSS units like px, em, rem, %, deg and vh.
	 *
	 * @param array $callback
	 *
	 * @return $this
	 */
	public function size_unit ( array $callback )
	{
		$this->size_unit = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's array of ranges for each register size.
	 * $min (int) The minimum value of range.
	 * $max (int) The maximum value of range.
	 * $step (int) The intervals value that will be incremented or decremented when using the controls’ spinners.
	 *
	 * @param array $callback
	 *
	 * @return $this
	 */
	public function range ( array $callback )
	{
		$this->range = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's to display the label.
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function show_label ( bool $callback )
	{
		$this->show_label = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's default value.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function default ( $callback )
	{
		$this->defaul = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's input type value.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function rows ( $callback )
	{
		$this->rows = $callback;

		return $this;
	}

	/**
	 * Set the field type style like strictly or not.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function step_strictly ( $callback )
	{
		$this->step_strictly = $callback;

		return $this;
	}

	/**
	 * Set the field autocomplete option enalbe.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function autocomplete ( $callback )
	{
		$this->autocomplete = $callback;

		return $this;
	}

	/**
	 * Set the field controls position.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function controls_position ( $callback )
	{
		$this->controls_position = $callback;

		return $this;
	}

	/**
	 * Set the field controls.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function controls ( $callback )
	{
		$this->controls = $callback;

		return $this;
	}

	/**
	 * Set the field maxlength.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function maxlength ( $callback )
	{
		$this->maxlength = $callback;

		return $this;
	}

	/**
	 * Set the field minlength.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function minlength ( $callback )
	{
		$this->minlength = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's input max row value.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function max_rows ( $callback )
	{
		$this->max_rows = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's input min row value.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function min_rows ( $callback )
	{
		$this->min_rows = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's mouse hover title value.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function mouseHoverTitle ( string $callback )
	{
		$this->mouseHoverTitle = $callback;

		return $this;
	}

	/**
	 * Add an array of elementor css selectors
	 *
	 * @param array $callback
	 *
	 * @return $this
	 */
	public function selectors ( array $callback )
	{
		$this->selectors = $callback;

		return $this;
	}

	/**
	 * Add an string of elementor css selectors
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function selector ( string $callback )
	{
		$this->selector = $callback;

		return $this;
	}

	/**
	 * Add an array of elementor css selectors
	 *
	 * @param array $callback
	 *
	 * @return $this
	 */
	public function wrap_selectors ( array $callback )
	{
		$this->wrap_selectors = wpe_array_key_prefix( $callback, '{{WRAPPER}} ' );

		return $this;
	}

	/**
	 * Add an string of elementor css selectors
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function wrap_selector ( string $callback )
	{
		$this->wrap_selector = '{{WRAPPER}} ' . $callback;

		return $this;
	}

	/**
	 * Add responsive true or false
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function responsive ( bool $callback )
	{
		$this->responsive = $callback;

		return $this;
	}

	/**
	 * Add global true or false
	 *
	 * @param array $callback
	 *
	 * @return $this
	 */
	public function global ( array $callback )
	{
		$this->global = $callback;

		return $this;
	}

	/**
	 * Add prefix_class
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function prefix_class ( bool $callback )
	{
		$this->prefix_class = $callback;

		return $this;
	}

	/**
	 * Add render_type
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function render_type ( bool $callback )
	{
		$this->render_type = $callback;

		return $this;
	}

	/**
	 * Add object_type
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function object_type ( string $callback )
	{
		$this->object_type = $callback;

		return $this;
	}

	/**
	 * Add filter_type
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function filter_type ( string $callback )
	{
		$this->filter_type = $callback;

		return $this;
	}

	/**
	 * Add filter_type
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function include_type ( bool $callback )
	{
		$this->include_type = $callback;

		return $this;
	}

	/**
	 * Add $selector_value
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function selector_value ( bool $callback )
	{
		$this->selector_value = $callback;

		return $this;
	}
}
