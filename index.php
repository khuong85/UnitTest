<?php

class SampleTest extends PHPUnit_Framework_TestCase
{

	protected $sample;
	protected $test;

	public function setUp(){
		$this->sample = array();
		$this->test = array(1, 2, 3);
	}

	public function additionProvider(){
		return array(4, 5, 6);
	}

	public function testEmpty(){
		$this->assertTrue(empty($this->sample));
	}

	/**
	 * @depends testEmpty
	 */
	public function testEqual(){
		$this->assertEquals($this->test, $this->sample);
	}

	/**
	 * @dataProvider additionProvider
	 */
	public function testAdd($a, $b, $result){
		return $this->assertEquals($result, $a, $b);
	}

	public function tearDown(){
		unset($this->sample);
	}
}