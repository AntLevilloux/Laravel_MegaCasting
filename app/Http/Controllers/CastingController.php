<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casting;

class CastingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $castings = Casting::all();
        return view("casting.index", compact("castings"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(casting $casting)
    {
        $castings = casting::all();

        return view('casting.show', compact('castings'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(casting $casting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, casting $casting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(casting $casting)
    {
        //
    }

}
