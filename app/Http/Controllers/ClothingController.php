<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothes;

class clothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clothing = Clothes::all();

        return view('clothing.index', compact('clothing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clothing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'size' => 'required',
            'type' => 'required',
        ]);

       $clothing = Clothes::Create($request->all());

       return redirect('/clothing/' . $clothing->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clothes $clothing)
    {
        return view('clothing.show', compact('clothing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Clothes $clothing)
    {
        return view('clothing.edit', compact('clothing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clothes $clothing)
    {
        $clothing->update($request->all());

        return redirect('/clothing/'. $clothing->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clothing->delete();

        return redirect ('/clothing/');
    }
}