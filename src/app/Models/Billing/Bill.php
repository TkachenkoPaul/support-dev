<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $table = 'bills';

}
