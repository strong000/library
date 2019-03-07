<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
	public function index()
	{
		$member = Member::all();

		return view('member.index', compact('member'));
	}

	public function create()
	{
		return view('member.create');
	}

	public function store(Request $request)
	{
		Member::create([
			'name' => $request->name,
			'age' => $request->age,
			'address' => $request->address,
			'telephone' => $request->telephone,
			'ic_number' => $request->ic_number,
			'date_of_joined' => $request->date_of_joined,
			'is_active' => $request->is_active
		]);

		return redirect()->route('member_index')->with('member', 'create');
	}

	public function edit($id)
	{
		$member = Member::find($id);

		return view('member.edit', compact('member'));
	}
	public function update(Request $request, $id)
	{
		$data = Member::find($id);
        $data->name = $request->name;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->telephone = $request->telephone;
        $data->ic_number = $request->ic_number;
        $data->date_of_joined = $request->date_of_joined;
        $data->is_active = $request->is_active;
        $data->save();
        return redirect()->route('member_index')->with('alert-success','Data berhasil diubah!');
	}
	public function delete(Request $request, $id)
	{
		$data = Member::find($id);
        $data->delete();
        return redirect()->route('member_index')->with('alert-success','Data berhasil didelete!');
	}

	}