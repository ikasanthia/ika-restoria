<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id',
        'name',
        'email',
        'reservation_date',
        'guests_count',
        'special_requests'
    ];

    // Relasi: Reservasi ini milik satu meja tertentu
    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
