<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;
    protected $connection = 'billing';
    protected $primaryKey = 'uid';
    protected $keyType = 'integer';
    protected $table = 'users';

    public function contacts(): HasOne
    {
        return $this->hasOne(UserPi::class,'uid','uid');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(MsgsMessage::class,'uid','uid');
    }

    public function tariff (): HasOne
    {
        return $this->hasOne(DvMain::class,'uid','uid');
    }

    public function group(): HasOne
    {
        return $this->hasOne(Group::class,'gid','gid');
    }

    public function deposit()
    {
        return $this->hasOne(Bill::class,'id','bill_id');
    }
}
