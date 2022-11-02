<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     *  @var array 
     */
    
    public function Membership(){ 
        return $this->hasOne(Membership::class, "id", "id_membership"); 
    }
    protected $fillable = [
        'nama_customer',
        'customer_id',
        'gender',
        'membership',
        'alamat',
        'tgl_lahir',
        'no_telp',
    ];
}
