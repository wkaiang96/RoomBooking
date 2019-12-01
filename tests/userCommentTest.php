<?php
use PHPUnit\Framework\TestCase;

class userCommentTest extends TestCase
{
	public $pageContents='';
	public $result='';
	public function testGetUserCommentJSON()
	{
		$URL ="http://localhost/roomBooking/bookingSystem/showComment.php?subject=";
		$defaultSubject = "";
		$pageContents = file_get_contents($URL.$defaultSubject);
		$this-> assertJson($pageContents);
		$result=json_decode($pageContents,true);
		$this-> assertIsArray($result);
		$this->assertIsString($pageContents);
		return $pageContents;
	}

	/**
	 * @depends testGetUserCommentJSON
	 */
	public function testGetUserCommentJSONDecode($pageContents){
		$this->assertJSON($pageContents);
		$result = json_decode($pageContents, true);
		$this->assertIsArray($result);
		return $result;
	}

	/**
	 * @depends testGetUserCommentJSONDecode
	 */
	public function testGetUserCommentJSONCustomFormats(array $result){
		$this->assertArrayHasKey('userComment', $result);
		$this->assertTrue($this->arrayIsAssociative($result));
		$this->assertIsArray($result['userComment']);
		$this->assertTrue($this->arrayIsSequential($result['userComment']));
		return $result['userComment'];
	}

	/**
	 * @depends testGetUserCommentJSONCustomFormats
	 */
	public function testDatasetFields(array $datasets){
		foreach($datasets as $data){
			$this->assertIsArray($data);
			$this->assertTrue($this->arrayIsAssociative($data));
			$this->assertArrayHasKey('contact_id', $data);
			$this->assertArrayHasKey('username', $data);
			$this->assertArrayHasKey('useremail', $data);
			$this->assertArrayHasKey('subject', $data);
			$this->assertArrayHasKey('message', $data);
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
