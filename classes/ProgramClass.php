<?php 

namespace MyClasses;

/**
 *  count lanterfish
 */
class ProgramClass
{
	
	public function countLanternFish(array $data, int $days){

		while ($days--) {
			foreach($data as $key => $value){
				if($data[$key] == 0){
					$data[$key] = 6;
					array_push($data, 8);
				} else {
					$data[$key] = $value - 1;
				}
			}
		}

		return count($data);
	}
}