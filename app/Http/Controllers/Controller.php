<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// <?php

// function get_all_turns($players, $turns, $start_player) {
	
// 	// Create an array of all the English alphabet letters.
// 	$alphabet = range('A', 'Z');
	
// 	// Get the first 6 letters from the array.
// 	$players = array_slice($alphabet, 0, $players);
	
// 	$turns_list = [];
// 	$action = 'push';
// 	$counter = 0;
// 	$current_player = $start_player-1; // 2
// 	for ($i = 0; $i < $turns; $i++) {

	

// 		if ($i == 0) {
// 			$lastElements = array_slice($players, $current_player);
// 			$firstElement = array_slice($players, 0, $current_player);

// 			$players = array_merge($lastElements, $firstElement);
// 		} else {
// 			if ($action == 'push') {
// 				array_push($players, $players[0]);
// 				array_shift($players);
// 			}

// 			if ($action == 'pop') {
// 				array_unshift($players, $players[$players -1]);
// 				array_pop($players);
// 			}

// 		}
		
// 		$counter += 1;
// 		$turns_list[$i] = $players;
// 		if ($counter == $players&& $action == 'push') {
// 			$players = array_reverse($players);
// 			$action = 'pop';
// 			$counter = 0;
// 		}

// 		if ($counter == $players && $action == 'pop') {
// 			echo $i;
// 			$players = array_reverse($players);
// 			$action = 'push';
// 			$counter = 0;

// 		}

// 		//$current_player = (int)($current_player + 1) % count($players);
// 		// print_r($CP);


// 	}

// 	 return $turns_list;

// }

// $players = 6;
// $turns = 15;
// $start_player = 2;

// $all_turns = get_all_turns($players, $turns, $start_player);

// echo "All turns:";
// print_r(json_encode($all_turns));

// ?>