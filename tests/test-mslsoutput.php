<?php
/**
 * Tests for MslsOutput
 *
 * @author Dennis Ploetner <re@lloc.de>
 * @package Msls
 */

/**
 * WP_Test_MslsOutput
 */
class WP_Test_MslsOutput extends WP_UnitTestCase {

	/**
	 * SetUp initial settings
	 */
	function setUp() {
		parent::setUp();
		wp_cache_flush();
	}

	/**
	 * Break down for next test
	 */
	function tearDown() {
		parent::tearDown();
	}

	/**
	 * Verify the static init-method
	 */
	function test_init_method() {
		$obj = MslsOutput::init();
		$this->assertInstanceOf( 'MslsOutput', $obj );
		return $obj;
	}

	/**
	 * Verify the get-method
	 * @depends test_init_method
	 */
	function test_get_method( $obj ) {
		$this->assertInternalType( 'array', $obj->get() );
	}

	/**
	 * Verify the __toString-method
	 * @depends test_init_method
	 */
	function test___toString_method( $obj ) {
		$this->assertInternalType( 'string', $obj->__toString() );
	}

	/**
	 * Verify the get_tags-method
	 * @depends test_init_method
	 */
	function test_get_tags_method( $obj ) {
		$this->assertInternalType( 'array', $obj->get_tags() );
	}
	
	/**
	 * Verify the set_tags-method
	 * @depends test_init_method
	 */
	function test_set_tags_method( $obj ) {
		$this->assertInstanceOf( 'MslsOutput', $obj->set_tags() );
	}

	/**
	 * Verify the get_tags-method
	 * @depends test_init_method
	 */
	function test_is_requirements_not_fulfilled_method( $obj ) {
		$this->assertInternalType( 'boolean', $obj->is_requirements_not_fulfilled( null, false, 'de_DE' ) );
	}

}
