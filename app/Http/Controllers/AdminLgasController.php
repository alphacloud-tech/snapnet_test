<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\State;
use Illuminate\Http\Request;

class AdminLgasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lgas = Lga::all();
        return view("admin.lgas.index", compact('lgas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.lgas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $states = State::pluck('name', 'id')->all(); 

        Lga::create($request->all(), compact('states'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lga = Lga::findOrFail($id);
        $states = State::pluck('name', 'id')->all(); 
        return view('admin.users.edit', compact('lga', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $lga = Lga::findOrFail($id);

        $lga->update($request->all());

        return redirect("/admin/lgas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lga = Lga::findOrFail($id);
        $lga->delete();
        return redirect("/admin/lgas");
    }
}
