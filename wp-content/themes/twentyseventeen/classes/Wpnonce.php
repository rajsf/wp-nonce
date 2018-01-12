<?php

if ( ! class_exists( 'Wpnonce' ) ) {
	/**
	 * Class Wpnonce
	 */
	class Wpnonce {
		/**
		*Add nonce to a FORM
		*@param $action :: this is an optional string which represents the action name
		*@param $name   :: this is an optional string which represents the name of the nonce.
		*@param $referer:: this is an optional boolean used to determine whether the referer hidden form field should be created
		*@param $echo   :: this is an optional boolean to determine whether Wordpress should echo the nonce hidden field
		*@return string is a nonce hidden form field, optionally followed by the referer hidden form field if the $referer argument is set to true.
		*/
		public static function get_wp_nonce_field( $action, $name, $referer=true, $echo=true ) {
			return wp_nonce_field( $action, $name, $referer, $echo );
		}
	}
}