<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $population = DB::table('populationGroups')->get();
        return  view('population.index', ['population' => $population]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('population.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeopleRequest $request)
    {

        if (DB::table('populationGroups')->insert([
            'id'        => $request->id,
            'culture'   => $request->culture,
            'religion'  => $request->religion,
            'profession'=> $request->profession,
            'population'=> $request->population

        ])) {
            return redirect()->route('population.index')->with('success', 'Data upload was successfull.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = DB::table('populationGroups')->where('id', '=', $id)->first();
        if (!$group) {
            return redirect()->route('population.index')->with('error', 'User not found.');
        }
        return view('population.show', ['group' => $group]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $group = DB::table('populationGroups')->where('id', '=', $id)->first();
        if (!$group) {
            return redirect()->route('population.index')->with('error', 'Group not found.');
        }
        return view('population.edit', ['group' => $group]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeopleRequest $request, string $id)
    {
        DB::table('populationGroups')->where('id', '=', $id)->update([
            'culture'   => $request->culture,
            'religion'  => $request->religion,
            'profession'=> $request->profession,
            'population'=> $request->population
        ]);
        return redirect()->route('population.show', $id)->with('success', 'Group updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('populationGroups')->delete($id);
        return redirect()->route('population.index')->with('success', 'Group deleted successfully.');

    }
}
