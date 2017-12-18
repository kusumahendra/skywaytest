<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	/**
	 * display blade html
	 * @return [view]
	 */
	public function index(){
		return view('index');
	}

	/**
	 * test 1 function worker
	 * @param  Request $request
	 * @return json
	 */
	public function testOneWorker(Request $request){
		$string = $request->sentence;
		if ($string == '') {
			return response()->json([
				'result'      => false,
			]);
		}
		$array = array_reverse(explode(" ", $string));
		$newstring = implode(" ", $array);
		return response()->json([
			'result'      => $newstring,
		]);
	}

	/**
	 * test 2 function worker
	 * @param  Request $request
	 * @return json
	 */
	public function testTwoWorker(Request $request){
		if ($request->limit == '') {
			return response()->json([
				'result'      => false,
			]);
		}
		$primes = [];
		for ($i=2; $i <= $request->limit ; $i++) {
			if($this->isPrimeNumber($i)){
				array_push($primes,$i);
			}
		}
		$primesString = implode(", ", $primes);
		return response()->json([
			'result'      => $primesString,
			'resultArray' => $primes
		]);
	}

	/**
	 * test 2 function worker
	 * @param  Request $request
	 * @return json
	 */
	public function testThreeWorker(Request $request){
		// dd($request->number);
		$numbers = $request->number;
		$numbers = array_filter($numbers);
		if (count($numbers) <= 0) {
			return response()->json([
				'result'      => false,
			]);
		}
		sort($numbers);
		$average = $this->average($numbers);
		$median = $this->median($numbers);
		return response()->json([
			'result'  => implode(', ',$numbers),
			'numbers' => $numbers,
			'highest' => end($numbers),
			'lowest'  => $numbers[0],
			'median' => $median,
			'average' => $average
		]);
	}

	/**
	 * prime number checker helper function
	 * @param  [integer] $i
	 * @return [boolean]
	 */
	public function isPrimeNumber($i) {
	    $n = 2;
	    while ($n < $i) {
	        if ($i % $n) {
	            $n++;
	            continue;
	        }

	        return false;
	    }

	    return true;
	}

	/**
	 * find average from array number
	 * @param  [array] $arr [array of number]
	 * @return [integer]
	 */
	function average($arr){
	    return ($arr) ? array_sum($arr)/count($arr) : 0;
	}

	/**
	 * find median from array number
	 * @param  [array] $arr [array of number]
	 * @return [integer]
	 */
	public function median($arr){
	    if($arr){
	        $count = count($arr);
	        sort($arr);
	        $mid = floor(($count-1)/2);
	        return ($arr[$mid]+$arr[$mid+1-$count%2])/2;
	    }
	}
}
