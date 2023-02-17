<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSampah extends Model
{
    protected $table = 'bank_sampahs';

    public function user(){
        return $this->belongsTo(User::class, 'id_pengelola');
    }
}
