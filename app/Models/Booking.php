<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'nama',
        'tanggal_checkin',
        'tanggal_checkout',
        'jumlah_tamu',
        'kontak',
        'tipe_kamar',
        'metode_pembayaran'
    ];
}
