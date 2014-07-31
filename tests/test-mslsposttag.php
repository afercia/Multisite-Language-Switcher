<?php
/**
 * Tests for MslsPostTag
 *
 * @author Dennis Ploetner <re@lloc.de>
 * @package Msls
 */

/**
 * WP_Test_MslsPostTag
 */
class WP_Test_MslsPostTag extends Msls_UnitTestCase {

	/**
	 * Verify the static suggest-method
	 * @expectedException WPDieException
	 * @expectedExceptionMessage []
	 */
	function test_suggest_method() {
		MslsPostTag::suggest();
	}

	/**
	 * Verify the static init-method
	 */
	function test_init_method() {
		$obj = MslsPostTag::init();
		$this->assertInstanceOf( 'MslsPostTag', $obj );
		return $obj;
	}

	/**
	 * Verify the static the_input-method
	 * @depends test_init_method
	 */
	function test_the_input_method( $obj ) {
		$tag = new StdClass;
		$tag->term_id = 1;
		$this->assertInternalType( 'boolean', $obj->the_input( $tag, 'test', 'test' ) );
	}

}
