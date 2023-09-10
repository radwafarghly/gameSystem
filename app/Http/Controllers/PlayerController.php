<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetPlayerRequest;
use App\Http\Resources\PlayerResource;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //


    public function getPlayers(GetPlayerRequest $request)
    {

        $data = $request->validated();

        $player_count = $data['players'];
        $start_player =  $data['start_player'];
        $turns =  $data['turns'];

        // Create an array of all the English alphabet letters.
        $alphabet = range('A', 'Z');

        // Get the first letters from the array.
        $players = array_slice($alphabet, 0, $player_count);


        $turns_list = [];
        $action = 'push';
        $counter = 0;

        $current_player = $start_player - 1; // array start with 0 

        for ($i = 0; $i < $turns; $i++) {
          
            if ($i == 0) {
                $lastElements = array_slice($players, $current_player);
                $firstElement = array_slice($players, 0, $current_player);
                $players = array_merge($lastElements, $firstElement);


            } else {
                if ($action == 'push') {
                    array_push($players, $players[0]);
                    array_shift($players);
                }

                if ($action == 'pop') {
                    array_unshift($players, $players[$player_count - 1]);
                    array_pop($players);
                }
            }

            $counter += 1;
            $turns_list[$i] = $players;
            if ($counter == $player_count && $action == 'push') {
                $players = array_reverse($players);
                $action = 'pop';
                $counter = 0;
            }

            if ($counter == $player_count && $action =='pop') {
                $players = array_reverse($players);
                $action = 'push';
                $counter = 0;
            }

        }

        // return $turns_list;
        return new PlayerResource($turns_list);
    }
}
