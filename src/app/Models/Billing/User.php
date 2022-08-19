<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'uid';
    protected $keyType = 'integer';
    protected $table = 'users';

    public function contacts(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserPi::class,'uid','uid');
    }

    public function messages()
    {
        return $this->hasMany(MsgsMessage::class,'uid','uid');
    }
}
