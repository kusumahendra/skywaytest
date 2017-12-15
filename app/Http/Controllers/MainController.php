<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index(){
		return view('index');
	}

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

	public function testThreeWorker(Request $request){
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
			'result'  => $numbers,
			'highest' => end($numbers),
			'lowest'  => $numbers[0],
			'median' => $median,
			'average' => $average
		]);
	}
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
	function average($arr){
	    return ($arr) ? array_sum($arr)/count($arr) : 0;
	}
	public function median($arr){
	    if($arr){
	        $count = count($arr);
	        sort($arr);
	        $mid = floor(($count-1)/2);
	        return ($arr[$mid]+$arr[$mid+1-$count%2])/2;
	    }
	}
}
