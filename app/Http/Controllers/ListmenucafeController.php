<?php

namespace App\Http\Controllers;

use App\Models\listmenucafe;
use Illuminate\Http\Request;

class ListmenucafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alllistmenucafe = listmenucafe::all();
        return view('listmenucafe.index', compact('alllistmenucafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listmenucafe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, listmenucafe $listmenucafe)
    {
    // validasi
    $validatedData = $request->validate([
        'nama_menu' => 'required|max:100',
        'kategori'  => 'required|max:100',
        'harga'     => 'required|numeric',
        'deskripsi' => 'required',
    ]);

        //simpan data
        listmenucafe::create($validatedData);

        //redirect ke index listmenucafe
        return redirect()->route('listmenucafe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(listmenucafe $listmenucafe)
    {
        return view('listmenucafe.show', compact('listmenucafe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(listmenucafe $listmenucafe)
    {
    return view('listmenucafe.edit', ['menu' => $listmenucafe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, listmenucafe $listmenucafe)
    {
    // validasi
    $validatedData = $request->validate([
        'nama_menu' => 'required|max:100',
        'kategori'  => 'required|max:100',
        'harga'     => 'required|numeric',
        'deskripsi' => 'required',
    ]);

    // update data
    $listmenucafe->update($validatedData);

    // redirect
    return redirect()->route('listmenucafe.index')
                     ->with('success', 'Menu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(listmenucafe $listmenucafe)
    {
        $listmenucafe->delete();
        //redirect ke index listmenucafe
        return redirect()->route('listmenucafe.index')
                        ->with('success', 'Menu berhasil dihapus');
    }
}
