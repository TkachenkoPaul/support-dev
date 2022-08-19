<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPi extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'uid';
    protected $keyType = 'integer';
    protected $table = 'users_pi';
}
