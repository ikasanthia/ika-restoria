<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index()
    {
        $tables = DB::table('tables')->get();
        return view('admin.tables.index', compact('tables'));
    }

    public function create()
    {
        return view('admin.tables.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'table_number' => 'required|string|max:255',
            'capacity'     => 'required|integer',
            'location'     => 'required|string|max:255',
        ]);

        DB::table('tables')->insert([
            'table_number' => $request->table_number,
            'capacity'     => $request->capacity,
            'location'     => $request->location,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return redirect()->route('tables.index')->with('success', 'Data meja berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $table = DB::table('tables')->where('id', $id)->first();
        return view('admin.tables.edit', compact('table'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'table_number' => 'required|string|max:255',
            'capacity'     => 'required|integer',
            'location'     => 'required|string|max:255',
        ]);

        DB::table('tables')->where('id', $id)->update([
            'table_number' => $request->table_number,
            'capacity'     => $request->capacity,
            'location'     => $request->location,
            'updated_at'   => now(),
        ]);

        return redirect()->route('tables.index')->with('success', 'Data meja berhasil diperbarui!');
    }

    public function destroy($id)
    {
        DB::table('tables')->where('id', $id)->delete();
        return redirect()->route('tables.index')->with('success', 'Data meja berhasil dihapus!');
    }
}
