<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     *  @var array 
     */
    protected $fillable = [
        'nama_Membership',
        'gender',
        'jumlah_Customer',
    ];
}
