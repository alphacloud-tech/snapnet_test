<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\Ward;
use Illuminate\Http\Request;

class AdminWardsCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wards = Ward::all();
        return view("admin.wards.index", compact('wards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.wards.create');
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

        $lgas = Lga::pluck('name', 'id')->all(); 

        Lga::create($request->all(), compact('lgas'));
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
        $ward = Ward::findOrFail($id);
        $lgas = Lga::pluck('name', 'id')->all(); 
        return view('admin.wards.edit', compact('ward', 'lgas'));
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
        $ward = Ward::findOrFail($id);

        $ward->update($request->all());

        return redirect("/admin/wards");
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
        $ward = Ward::findOrFail($id);
        $ward->delete();
        return redirect("/admin/wards");
    }
}
