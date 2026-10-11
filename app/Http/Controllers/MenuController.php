<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dari tabel 'menu' beserta relasi kategorinya
        $menu = Menu::with('kategori')->get();

        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua data kategori untuk pilihan dropdown di form
        $kategori = Kategori::all();

        return view('admin.menu.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'nama_menu'   => 'required|string|max:255',
            'harga'       => 'required|numeric',
            'deskripsi'   => 'nullable|string',
            'foto'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Olah upload foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('menu', 'public');
        }

        // 3. Simpan data ke database
        Menu::create([
            'kategori_id' => $request->kategori_id,
            'nama_menu'   => $request->nama_menu,
            'harga'       => $request->harga,
            'deskripsi'   => $request->deskripsi,
            'foto'        => $fotoPath,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan!');
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
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $kategori = Kategori::all();

        return view('admin.menu.edit', compact('menu', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        // Validasi input
        $request->validate([
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'nama_menu'   => 'required|string|max:255',
            'harga'       => 'required|numeric',
            'deskripsi'   => 'nullable|string',
            'foto'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update foto jika ada upload foto baru
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('menu', 'public');
            $menu->foto = $fotoPath;
        }

        // Update field lainnya
        $menu->kategori_id = $request->kategori_id;
        $menu->nama_menu   = $request->nama_menu;
        $menu->harga       = $request->harga;
        $menu->deskripsi   = $request->deskripsi;
        $menu->save();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus!');
    }
}
