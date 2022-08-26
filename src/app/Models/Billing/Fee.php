<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $table = 'fees';
    public $timestamps = false;
}
