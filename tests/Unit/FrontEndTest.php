<?php
/**
 * Unit tests for Front End class
 *
 * @package      Gamajo\GenesisJsNoJs\Tests\Unit
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\GenesisJsNoJs\Tests\Unit;

use Gamajo\GenesisJsNoJs\FrontEnd;
use Gamajo\GenesisJsNoJs\Tests\TestCase;

/**
 * FrontEnd test case.
 */
class FrontEndTest extends TestCase {

	/**
	 * Test that hooks are added.
	 */
	public function test_hooks_are_added() {
		// Call the method under test.
		( new FrontEnd() )->register();

		// Check the filters are added.
		static::assertEquals( 10, has_filter( 'body_class', 'Gamajo\GenesisJsNoJs\FrontEnd->body_class()' ), 'Body class method is not hooked in.' );
	}

	/**
	 * Test body_class method.
	 */
	public function test_body_class_is_added() {
		$testee  = new FrontEnd();
		$classes = [
			'a',
			'b',
			'c',
		];

		$filtered_classes = $testee->body_class( $classes );

		static::assertCount( 4, $filtered_classes );
		static::assertContains( 'no-js', $filtered_classes );
	}

}
