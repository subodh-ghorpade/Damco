<?php 

namespace MyClasses;

/**
 *  count lanterfish
 */
class ProgramClass
{
	
	public function countLanternFish(array $input, int $days){
		$data = array_count_values($input);

		while ($days) {
			$newData = array_fill(0, 9, 0);
			foreach($data as $key => $value){
				if($key - 1 < 0){
					$newData[6] += $value;
					$newData[8] += $value;
				} else {
					$newData[$key - 1] += $value;
				}
			}

			$data = $newData;

			$days--;
		}

		return array_sum($newData);
	}
}