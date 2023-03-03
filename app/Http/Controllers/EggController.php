<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use Illuminate\Http\Request;

class EggController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eggs = Egg::all();
        return view('eggs.index', compact('eggs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eggs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $egg = new Egg();


        $egg->fill($data);

        $egg->save();
        // per tornare alla route
        return to_route('eggs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $egg = Egg::findOrFail($id);
        return view('eggs.show', compact('egg'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Egg $egg)
    {
        return view('eggs.edit', compact('egg'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Egg $egg)
    {
        $data = $request->all();

        $egg->fill($data);

        $egg->save();

        return to_route('eggs.show', $egg->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
