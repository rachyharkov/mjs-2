<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'email',
        'alamat',
        'kota',
        'provinsi',
        'telp',
        'personal_kontak',
        'website',
        'kode_pos',
        'catatan',
    ];
}
