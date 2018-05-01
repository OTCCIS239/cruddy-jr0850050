<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dice;

class DiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dice = Dice::all();

        return view('dice.index', compact('dice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $this->validate($request, [
            'size' => 'required',
        ]); */

       $dice = Dice::Create($request->all());

       return redirect('/dice/' . $dice->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dice $dice)
    {
        return view('dice.show', compact('dice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dice $dice)
    {
        return view('dice.edit', compact('dice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dice $dice)
    {
        $dice->update($request->all());

        return redirect('/dice/'. $dice->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dice $dice)
    {
        $dice->delete();

        return redirect ('/dice/');
    }
}