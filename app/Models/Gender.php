<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * fillable
     *  @var array 
     */

    public function customer(){ 
        return $this->hasOne(Customer::class, "id", "customer_id"); 
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
