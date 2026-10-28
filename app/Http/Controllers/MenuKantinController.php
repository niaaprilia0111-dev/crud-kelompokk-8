<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuKantin;
class MenuKantinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = MenuKantin::all();
        return view('menu-kantins.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu-kantins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_menu' => 'required|unique:menu_kantins,kode_menu',
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string|max:255',
            'harga'     => 'required|numeric',
            'stok'      => 'required|integer',
            'status'    => 'required|string',
            'keterangan'=> 'nullable|string',
        ]);

        MenuKantin::create($request->all());

        return redirect()->route('menu-kantins.index')
        ->with('success', 'Menu kantin berhasil ditambahkan!');
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
    public function edit(MenuKantin $menuKantin)
    {
        return view('menu-kantins.edit', compact('menuKantin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuKantin $menuKantin)
    {
        $request->validate([
            'kode_menu' => 'required|unique:menu_kantins,kode_menu,' . $menuKantin->id,
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string|max:255',
            'harga'     => 'required|numeric',
            'stok'      => 'required|integer',
            'status'    => 'required|string',
            'keterangan'=> 'nullable|string',
        ]);

        $menuKantin->update($request->all());

        return redirect()->route('menu-kantins.index')
        ->with('success', 'Menu kantin berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuKantin $menuKantin)
{
    $menuKantin->delete();

    return redirect()->route('menu-kantins.index')
        ->with('success', 'Menu kantin berhasil dihapus!');
}
}
