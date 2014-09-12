<?php
/**
Aihrus WordPress Starter
Copyright (C) 2014  Michael Cannon

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

require_once AIHR_DIR_INC . 'class-aihrus-widget.php';

if ( class_exists( 'WordPress_Starter_Widget' ) )
	return;


class WordPress_Starter_Widget extends Aihrus_Widget {
	const ID = 'wordpress-starter-widget';

	public function __construct( $classname = null, $description = null, $id_base = null, $title = null ) {
		$classname   = 'WordPress_Starter_Widget';
		$description = esc_html__( 'Display Aihrus WordPress Starter entries.' );
		$id_base     = self::ID;
		$title       = esc_html__( 'Aihrus WordPress Starter' );

		parent::__construct( $classname, $description, $id_base, $title );
	}


	public static function get_defaults() {
		return WordPress_Starter::get_defaults();
	}


	/**
	 *
	 *
	 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
	 */


	public static function get_content( $instance, $widget_number ) {
		return $widget_number;
	}


	public static function validate_settings( $instance ) {
		return WordPress_Starter_Settings::validate_settings( $instance );
	}


	public static function form_instance( $instance ) {
		if ( empty( $instance ) ) {
			// no instance
			$instance = array();
		} elseif ( ! empty( $instance['resetted'] ) ) {
			// reset instance
		}

		return $instance;
	}


	/**
	 *
	 *
	 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
	 */
	public static function form_parts( $instance, $number ) {
		$form_parts = WordPress_Starter_Settings::get_settings();
		$form_parts = apply_filters( 'wps_widget_options', $form_parts );

		return $form_parts;
	}


	/**
	 *
	 *
	 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
	 */
	public static function get_suggest( $id, $suggest_id ) {
		return $suggest_id;
	}


}


?>
