<?php
/**
 * Genesis JS No Js
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2011 Gary Jones, Gamajo
 * @license   GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\GenesisJsNoJs;

/**
 * Plugin class.
 *
 * @package GenesisJsNoJs
 * @author  Gary Jones
 */
class FrontEnd {

	/**
	 * Add action and filter.
	 *
	 * @since 1.0.0
	 */
	public function register() {
		\add_filter( 'body_class', [ $this, 'body_class' ] );
	}

	/**
	 * Add 'no-js' class to the body class values.
	 *
	 * @since 1.0.0
	 *
	 * @param array $classes Existing classes.
	 * @return array
	 */
	public function body_class( array $classes ) : array {
		$classes[] = 'no-js';

		return $classes;
	}
}
