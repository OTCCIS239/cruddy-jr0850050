<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Figure;

class FigurineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $figurine = Figure::all();

        return view('figurines.index', compact('figurine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('figurines.create');
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
            'race' => 'required',
            'class' => 'required',
        ]);

       $figurine = Figure::Create($request->all());

       return redirect('/figurines/' . $figurine->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Figure $figurine)
    {
        return view('figurines.show', compact('figurine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Figure $figurine)
    {
        return view('figurines.edit', compact('figurine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Figure $figurine)
    {
        $figurine->update($request->all());

        return redirect('/figurines/' . $figurine->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();

        return redirect ('/figurines/');
    }
}