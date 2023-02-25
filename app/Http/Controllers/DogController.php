<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dog = Dog::all();
        return view('welcome', [
            'dog' => $dog
        ]);
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
    // $table->text('name');
    //     $table->tinyInteger('age');
    //     $table->text('sex');
    //     $table->text('breed');
    //     $table->text('colour');
    //     $table->text('size');
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|max:100',
            'age' => 'required|max:50',
            'sex' => 'required|max:50',
            'breed' => 'required|max:50',
            'colour' => 'required|max:50',
            'size' => 'required|max:50'
        ]);

        Dog::create($request->all());

        return redirect('/dogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        //
    }
}
