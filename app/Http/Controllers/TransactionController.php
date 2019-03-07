<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Member;
use App\Lending;
use Carbon\Carbon;

class TransactionController extends Controller
{
	public function lending()
	{
		$movies = Movie::all();
		$members = Member::where('is_active', 1)->get();


		return view('lendings', compact('movies', 'members'));
	}

	public function lend_action(Request $request)
	{
		Lending::create([
			'movie_id' => $request->movie_id,
			'member_id' => $request->member_id,
			'expected_return_date' => $request->exp_return_date,
			'lending_date' => Carbon::now()
		]);

		return redirect('/returnment')->with('lending', 'create');
	}

	public function returnment()
	{
		$lendings = Lending::where('returned_date', null)->get();

		return view('returnment', compact('lendings'));
	}

	public function returnment_with_charge(Request $request)
	{
		Lending::find($request->return_id)->update([
			'returned_date' => Carbon::now(),
			'lateness_charge' => $request->lateness_charge
		]);

		return redirect('/returnment')->with('lending', 'returnment');
	}

	public function returnment_without_charge($id)
	{
		Lending::find($id)->update([
			'returned_date' => Carbon::now(),
			'lateness_charge' => 0
		]);

		return redirect('/returnment')->with('lending', 'returnment');
	}
}