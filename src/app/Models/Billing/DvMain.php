<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DvMain extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'uid';
    protected $table = 'dv_main';
    public $timestamps = false;
    protected $fillable = [
        'disable'
    ];

    public function information()
    {
        return $this->hasOne(Tariff::class,'id','tp_id');
    }
}
