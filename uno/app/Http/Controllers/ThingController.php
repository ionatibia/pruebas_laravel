<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $things = Thing::all(); */
        /* $things = Thing::where('value', '==', 1)->orWhere('is_active', 0)->orderBy('name', 'desc')->get(); */
        $things = DB::select('SELECT * FROM things WHERE value = 1');
        return view('about', compact('things'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Thing::create([
            "name" => "Nombre1",
            "value" => 1,
            "is_active" => (bool)0
        ]);
        Thing::create([
            "name" => "Nombre2",
            "value" => 2,
            "is_active" => (bool)1
        ]);
        Thing::create([
            "name" => "Nombre3",
            "value" => 3,
            "is_active" => (bool)0
        ]);
        return redirect()->route('about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Thing $thing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thing $thing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thing $thing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thing $thing)
    {
        //
    }
}
