<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostramdo todos los datos de la tabla index
        $test=Test::all();
        return view("test.index",compact("test")); //pasando la variabñe,podemos recuperar los datos
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
        //poder guardar los datos
        $tests = new Test;
        $tests->pregunta=$request->input('pregunta'); //ingresamos el name
        $tests->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $test=Test::find($id);
        return view("test.modal-info",compact("test"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $tests=Test::find($id);
        $tests->pregunta=$request->input('pregunta'); //ingresamos el name
        $tests->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tests=Test::find($id);
        $tests->delete();
        return redirect()->back();

    }
}
