<?php

namespace App\Http\Controllers;

use App\Models\Suratkeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = Suratkeluar::all();
        return view('halaman.suratkeluar.index', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suratklr = Suratkeluar::select('id')->get();
        return view('halaman.suratkeluar.create', compact('suratklr'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tambah = Suratkeluar::create($request->all());
        return redirect()->route('halaman.suratkeluar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $surats = Suratkeluar::findOrFail($id);
        return view('halaman.suratkeluar.edit', compact('surats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $surats = Suratkeluar::findOrFail($id);
        $surats->update($request->all());
        return redirect()->route('halaman.suratkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Suratkeluar::where('id', $id)->delete();
        return redirect()->route('halaman.suratkeluar.index');
    }
}
