<?php


use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
	public function testGetDataBasedOnEmail()
	{
		$URL ="http://localhost/roomBooking/bookingSystem/dataApi.php?email=";
		$defaultEmail = "wkaiang96@gmail.com";
		$pageContents = file_get_contents($URL.$defaultEmail);
		$this-> assertJson($pageContents);
		$result=json_decode($pageContents,true);
		$this-> assertIsArray($result);
	}
	public function testGetUserComment()
	{
		$URL ="http://localhost/roomBooking/bookingSystem/showComment.php?subject=";
		$defaultSubject = "";
		$pageContents = file_get_contents($URL.$defaultSubject);
		$this-> assertJson($pageContents);
		$result=json_decode($pageContents,true);
		$this-> assertIsArray($result);
	}
}
