<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualans';
    protected $primaryKey = 'penjualan_id';

    public $incrementing = false;

    public $guarded = [];
}
