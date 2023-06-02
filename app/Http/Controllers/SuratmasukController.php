<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuk;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = Suratmasuk::all();
        return view('halaman.suratmasuk.index', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suratmsk = Suratmasuk::select('id')->get();
        return view('halaman.suratmasuk.create', compact('suratmsk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tambahh = Suratmasuk::create($request->all());
        return redirect()->route('halaman.suratmasuk.index');
        // $tambahh = Suratmasuk::create($request->all());
        // return redirect()->route('halaman.suratmasuk.index');
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
        $surats = Suratmasuk::findOrFail($id);
        return view('halaman.suratmasuk.edit', compact('surats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $surats = Suratmasuk::find($id);
        $surats->update($request->all());
        return redirect()->route('halaman.suratmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Suratmasuk::where('id', $id)->delete();
    return redirect()->route('halaman.suratmasuk.index');
    }
}
