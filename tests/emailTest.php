<?php
use PHPUnit\Framework\TestCase;

class emailTest extends TestCase
{
	public $pageContents='';
	public $result='';
	public function testGetDataBasedOnEmailJSON()
	{
		$URL ="http://localhost/roomBooking/bookingSystem/dataApi.php?email=";
		$defaultEmail = "wkaiang96@gmail.com";
		$pageContents = file_get_contents($URL.$defaultEmail);
		$this-> assertJson($pageContents);
		$result=json_decode($pageContents,true);
		$this-> assertIsArray($result);
		$this->assertIsString($pageContents);
		return $pageContents;
	}

	/**
	 * @depends testGetDataBasedOnEmailJSON
	 */
	public function testGetDataBasedOnEmailJSONDecode($pageContents){
		$this->assertJSON($pageContents);
		$result = json_decode($pageContents, true);
		$this->assertIsArray($result);
		return $result;
	}

	/**
	 * @depends testGetDataBasedOnEmailJSONDecode
	 */
	public function testGetDataBasedOnEmailJSONCustomFormats(array $result){
		$this->assertArrayHasKey('userDetails', $result);
		$this->assertTrue($this->arrayIsAssociative($result));
		$this->assertIsArray($result['userDetails']);
		$this->assertTrue($this->arrayIsSequential($result['userDetails']));
		return $result['userDetails'];
	}

	/**
	 * @depends testGetDataBasedOnEmailJSONCustomFormats
	 */
	public function testDatasetFields(array $datasets){
		foreach($datasets as $data){
			$this->assertIsArray($data);
			$this->assertTrue($this->arrayIsAssociative($data));
			$this->assertArrayHasKey('email', $data);
			$this->assertArrayHasKey('name', $data);
			$this->assertArrayHasKey('gender', $data);
			$this->assertArrayHasKey('password', $data);
			$this->assertArrayHasKey('phoneNo', $data);
			$this->assertArrayHasKey('type', $data);

		}
	}

	public function arrayIsAssociative($arr){
		if(array_keys($arr) !== range(0, count($arr) - 1))
			return true;
		else
			return false;
	}

	public function arrayIsSequential($arr){
		if(array_keys($arr) == range(0, count($arr) - 1))
			return true;
		else
			return false;
	}
}
