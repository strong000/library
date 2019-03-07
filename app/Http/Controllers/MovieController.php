<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movies = Movie::all();

		return view('movie.index', compact('movies'));
	}

	public function create()
	{
		return view('movie.create');
	}

	public function store(Request $request)
	{
		Movie::create([
			'title' => $request->title,
			'genre' => $request->genre,
			'released_date' => $request->released_date
		]);

		return redirect()->route('movie_index')->with('movie', 'create');
	}

	public function edit($id)
	{
		$movie = Movie::find($id);

		return view('movie.edit', compact('movie'));
	}

	public function update(Request $request, $id)
	{
		$data = Movie::find($id);
        $data->title = $request->title;
        $data->genre = $request->genre;
        $data->released_date = $request->released_date;
        $data->save();
        return redirect()->route('movie_index')->with('alert-success','Data berhasil diubah!');
	}
	public function delete(Request $request, $id)
	{
		$data = Movie::find($id);
        $data->delete();
        return redirect()->route('movie_index')->with('alert-success','Data berhasil didelete!');
	}
}