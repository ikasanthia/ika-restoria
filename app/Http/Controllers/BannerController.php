<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fotoPath = $request->file('foto')->store('banners', 'public');

        Banner::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner berhasil ditambahkan!');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($banner->foto && Storage::disk('public')->exists($banner->foto)) {
                Storage::disk('public')->delete($banner->foto);
            }
            $banner->foto = $request->file('foto')->store('banners', 'public');
        }

        $banner->judul = $request->judul;
        $banner->deskripsi = $request->deskripsi;
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner berhasil diperbarui!');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->foto && Storage::disk('public')->exists($banner->foto)) {
            Storage::disk('public')->delete($banner->foto);
        }

        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner berhasil dihapus!');
    }
}
