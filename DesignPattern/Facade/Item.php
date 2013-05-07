<?php
class Item
{
	private $id;
	private $name;
	private $price;
	
	public function __construct($id,$name,$price)
	{
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}
	
	public function getid()
	{
		return $this->id;
	}
	
	public function getname()
	{
		return $this->name;
	}
	
	public function getprice()
	{
		return $this->price;
	}
}