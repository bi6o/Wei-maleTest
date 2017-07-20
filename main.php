<?php

include "Item.php";

$apple = new Item("Apple" , "0.25");
$orange = new Item("Orange" , "0.30");
$garlic = new Item("Garlic" , "0.15");
$papaya = new Item("Papaya" , "0.50");
$items = [];
$total = 0;
$countToTwo = 0;

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
			$total += $apple->getPrice();
			$items[] = $apple->getName();
			break;
		case 2:
			$total += $orange->getPrice();
			$items[] = $orange->getName();
			break;
		case 3:
			$total += $garlic->getPrice();
			$items[] = $garlic->getName();
			break;
		case 4:
			$countToTwo ++;
			$total += $papaya->getPrice();
			$items[] = $papaya->getName();
			if ($countToTwo == 2) {
				$items[] = $papaya->getName();
				$countToTwo = 0;
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
