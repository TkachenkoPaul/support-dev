<?php

namespace App\Models\Billing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $connection = 'billing';
    protected $primaryKey = 'gid';
    protected $table = 'groups';
    public $timestamps = false;
}
