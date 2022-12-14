<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $table = 'payments';
    public $timestamps = false;
}
