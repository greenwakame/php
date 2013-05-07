<?php
require_once('Item.php');

class OrderItem
{
	private $item;
	private $amount;
	
	public function __construct(Item, $item, $amount)
	{
		$this->id = $id;
		$this->amount = $amount;
	}
	
	public function getItem()
	{
		return $this->item;
	}
	
	public function getAmount()
	{
		return $this->amount;
	}
}