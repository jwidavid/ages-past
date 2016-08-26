<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BattleCharacterController extends Controller
{
	
	public function main() {
	
		// gather both character's information
		
	    // check if player has the right to attack character
	    
	    // reduce player energy
	    
	    $char_array = array($char1,$char2);
	    
	    // begin battle
	    CommenceBattle($char_array);
	}
	
	
	private function CommenceBattle($players) {

		$count = 0;
		while (true) {
			$count++;
			$players_temp = $players;
			$attacker_key = array_rand($players);
			$attacker     =& $players[$attacker_key];
			unset($players_temp[$attacker_key]);
			$defender_key = array_rand($players_temp);
			$defender     =& $players[$defender_key];
		
			$hit = ($attacker['attack']/$defender['defense']) + rand(1, $attacker['level']);
			echo "{$count}. Player {$defender_key} ({$defender['health']} health) is hit a {$hit} by Player {$attacker_key} ({$attacker['health']} health)\n";
			$defender['health'] = $defender['health'] - $hit;
		
			if ($defender['health'] <= 0) {
		    	echo "Player {$defender_key} dies, Player {$attacker_key} is victorious!\n";
				break;
			}
		
		}
	}
	
	
	private function CommenceMultipleBattle($players) {
		set_time_limit(1);
		$players = array(
			'A' => array('attack' => 1, 'defense' => 2, 'health' => 10, 'level' => 2, ), 
			'B' => array('attack' => 2, 'defense' => 1, 'health' => 10, 'level' => 2, ), 
			'C' => array('attack' => 1, 'defense' => 1, 'health' => 10, 'level' => 2, ), 
			'D' => array('attack' => 2, 'defense' => 2, 'health' => 10, 'level' => 2, ), 
		);
		$player_ids = array_keys($players);
		$no_of_players = sizeof($player_ids);
		$count = 0;
		while (true) {
			$defender_key=0;
			for ($attacker_key=0;$attacker_key<$no_of_players;$attacker_key++) {
		    	if (!isset($player_ids[$attacker_key])) continue;
				$count++;
				$attacker_id  = $player_ids[$attacker_key];
				$attacker     =& $players[$attacker_id];
		
				$defender_key = $attacker_key + 1;
				while (!isset($player_ids[$defender_key])) {
					$defender_key = ($defender_key+1 < $no_of_players) ?  $defender_key + 1 : 0;
				}
				$defender_id  = $player_ids[$defender_key];
				$defender     =& $players[$defender_id];
		
				$hit = round(($attacker['attack']/$defender['defense']) + rand(1, $attacker['level']), 2);
				echo "{$count}. Player {$attacker_id} ({$attacker['health']} health) has hit a {$hit} on Player {$defender_id} ({$defender['health']} health)<br />";
				$defender['health'] = $defender['health'] - $hit;
		
				if ($defender['health'] <= 0) {
					echo "Player {$defender_id} dies<br />";
					unset($players[$defender_id], $player_ids[$defender_key]);
					if (sizeof($player_ids) == 1) {
						echo "Player {$attacker_id} is victorious!<br />";
						break 2;
					}
				}
				//if ($count > 100) break 2;
			}
		}
	}
	
	
	/*
		
	hitpoint : which means how much can one take damages without dying!
armor : which is basically telling you how much can damage is taken from attack (the higher armor means less damage).
damage : which means how much damage can player deal in one attack
attack speed : means how many attacks can one deal in one second
life regen : which means how much hitpoint will player regain every second
strength : which directly affects health and life regen
agility : which directly affects armor
knowing these parameters there are two variables which will determine battle results

dps (which is damage per second) is equal to attackspeed*damage
ehp (which means effective hitpoint) is equal to hitpoint * (1+constant*armor)
while in warcraft engine the battle takes place in real time, you can directly compute results in your game, as a note every variable with number 1 is related to player 1 and every thing I assume 1/(1+constant * armor) * dps > liferegen:

t1 = hitpoint2 * (1 + constant * armor2) / (dps1 - liferegen2 * (1 + constant * armor2));
t2 = hitpoint1 * (1 + constant * armor1) / (dps2 - liferegen1 * (1 + constant * armor1));
t1 and t2 will represent how much time does it take for player1 to kill player2 and time needed for player2 to kill player1. you can easily check if t1>t2 or t2>t1 and declare results.

	*/
	
	
}