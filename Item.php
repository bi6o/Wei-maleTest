<?php

class Item
{
	private $name;
	private $price;

	function __construct($name , $price) {
		$this->setName($name);
		$this->setPrice($price);
		return $this;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		return $this;

	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		return $this;

	}
	public static  function addPrice(Item $item,$total) {
		$total += $item->getPrice();
		return $total;
	}
	public static function addToList(Item $item,$list) {
		$list[] = $item->getName();
		return $list;
	}
}
