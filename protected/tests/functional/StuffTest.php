<?php

class StuffTest extends WebTestCase
{
	public $fixtures=array(
		'stuffs'=>'Stuff',
	);

	public function testShow()
	{
		$this->open('?r=stuff/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=stuff/create');
	}

	public function testUpdate()
	{
		$this->open('?r=stuff/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=stuff/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=stuff/index');
	}

	public function testAdmin()
	{
		$this->open('?r=stuff/admin');
	}
}
