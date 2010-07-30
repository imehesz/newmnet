<?php

class FeedTest extends WebTestCase
{
	public $fixtures=array(
		'feeds'=>'Feed',
	);

	public function testShow()
	{
		$this->open('?r=feed/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=feed/create');
	}

	public function testUpdate()
	{
		$this->open('?r=feed/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=feed/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=feed/index');
	}

	public function testAdmin()
	{
		$this->open('?r=feed/admin');
	}
}
