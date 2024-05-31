<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $characters = Character::all();

        return view('characters.index',compact('characters'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|max:200',
            'description'=>'required|max:1000',
            'attack'=>'required|min:0|max:9|numeric',
            'defence'=>'required|min:0|max:9|numeric',
            'speed'=>'required|min:1|max:9|numeric',
            'life'=>'required|min:10|max:100|numeric'
        ]);

        $form_data = $request->all();

        $new_character = Character::create($form_data);

        return to_route('characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        
        return view('characters.edit',compact('character'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {

        $request->validate([
            'name'=>'required|max:200',
            'description'=>'required|max:1000',
            'attack'=>'required|min:0|max:9|numeric',
            'defence'=>'required|min:0|max:9|numeric',
            'speed'=>'required|min:1|max:9|numeric',
            'life'=>'required|min:10|max:100|numeric'
        ]);

        $form_data = $request->all();

        $character->update($form_data);

        return to_route('characters.index', $character);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {

        $character->delete();

        return to_route('characters.index');
    }
}
