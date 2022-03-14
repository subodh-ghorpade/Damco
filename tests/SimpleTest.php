<?php 

use PHPUnit\Framework\TestCase;
use MyClasses\ProgramClass;


/**
 * 
 */
final class SimpleTest extends TestCase
{

	/**
	 * @dataProvider dataProvider
	*/
	public function testCountLanternFish(int $expectedResult, array $data, int $days): void {

		$obj = new ProgramClass;

		$this->assertEquals($expectedResult, $obj->countLanternFish($data, $days));

	}

	public function dataProvider(): array{
		return [
			[
				26,	[3,4,3,1,2], 18,
			],
			[
				5934, [3,4,3,1,2], 80,
			]
		];
	}




}