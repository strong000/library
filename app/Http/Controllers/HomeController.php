<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Movie;
use App\Lending;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_counts = [
            'member' => Member::count(),
            'movie' => Movie::count(),
            'lending' => Lending::count()
        ];

        return view('dashboard', compact('data_counts'));
    }
}
