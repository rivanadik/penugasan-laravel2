<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idbuku' => 'required',
            'namabuku' => 'required',
            'penerbit' => 'required',
            'namapenulis' => 'required',
            'tahun_dirilis' => 'required',
            'jenis_buku' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'idbuku' => 'required',
            'namabuku' => 'required',
            'penerbit' => 'required',
            'namapenulis' => 'required',
            'tahun_dirilis' => 'required',
            'jenis_buku' => 'required',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil dihapus');
    }
}