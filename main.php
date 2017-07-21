<?php

include "Item.php";

$apple = new Item("Apple" , "0.25");
$orange = new Item("Orange" , "0.30");
$garlic = new Item("Garlic" , "0.15");
$papaya = new Item("Papaya" , "0.50");
$items = [];
$total = 0;
$papayaCounter = 0;

while( true ) {

	echo "Your current total is " . $total . "€\n\n";

	printMenu();

	// Read user choice
	$choice = trim( fgets(STDIN) );

	if ($choice == 5) {
		echo "Thank you for participating in this test, your full total is " . $total . "€\n";
		echo "Your items are: \n";
		foreach ($items as $item) {
			echo $item . "\n";
		}
		break;
	}

	switch ($choice) {
		case 1:
			$total = Item::addPrice($apple, $total);
			$items = Item::addToList($apple, $items);
			break;
		case 2:
			$total = Item::addPrice($orange, $total);
			$items = Item::addToList($orange, $items);
			break;
		case 3:
			$total = Item::addPrice($garlic, $total);
			$items = Item::addToList($garlic, $items);
			break;
		case 4:
			$papayaCounter ++;
			$total = Item::addPrice($papaya, $total);
			$items = Item::addToList($papaya, $items);

			if ($papayaCounter == 2) {
				$items = Item::addToList($papaya, $items);
				$papayaCounter = 0;
			}
			break;
		default:
			echo "\nWrong entry, please enter your choice from 1 to 5\n";
			break;

	}
}

function printMenu() {

	echo "******************************\n";
	echo "1 - Choose an Apple\n";
	echo "2 - Choose an Orange\n";
	echo "3 - Choose Garlic\n";
	echo "4 - Choose a Papaya\n";
	echo "5 - Quit\n";
	echo "******************************\n";
	echo "Enter your choice from 1 to 5 ::";
}

?>
