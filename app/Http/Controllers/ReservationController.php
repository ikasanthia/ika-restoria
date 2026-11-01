<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Table;

class ReservationController extends Controller
{
    // Menampilkan data meja (Query Builder) dan reservasi (Eloquent)
    public function index()
    {
        $tables = DB::table('tables')->get();
        $reservations = Reservation::with('table')->latest()->get();

        return view('admin.reservations.index', compact('tables', 'reservations'));
    }

    // Menyimpan data reservasi dari tamu
    public function store(Request $request)
    {
        $request->validate([
            'table_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'reservation_date' => 'required|date',
            'guests_count' => 'required|integer',
            'special_requests' => 'nullable|string'
        ]);

        Reservation::create([
            'table_id' => $request->table_id,
            'name' => $request->name,
            'email' => $request->email,
            'reservation_date' => $request->reservation_date,
            'guests_count' => $request->guests_count,
            'special_requests' => $request->special_requests,
        ]);

        return redirect()->back()->with('success', 'Reservasi meja berhasil dikonfirmasi!');
    }

    // Menampilkan form edit reservasi
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $tables = DB::table('tables')->get();

        return view('admin.reservations.edit', compact('reservation', 'tables'));
    }

    // Memperbarui data reservasi
    public function update(Request $request, $id)
    {
        $request->validate([
            'table_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'reservation_date' => 'required|date',
            'guests_count' => 'required|integer',
            'special_requests' => 'nullable|string'
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update([
            'table_id' => $request->table_id,
            'name' => $request->name,
            'email' => $request->email,
            'reservation_date' => $request->reservation_date,
            'guests_count' => $request->guests_count,
            'special_requests' => $request->special_requests,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Data reservasi berhasil diperbarui!');
    }

    // Menghapus data reservasi
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->back()->with('success', 'Data reservasi berhasil dihapus!');
    }
}
