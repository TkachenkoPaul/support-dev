<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;


class AbbilsAuthServiceProvider extends EloquentUserProvider
{

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = $credentials['password'];
        $p = DB::connection('billing')->select('select DECODE(password,:secret) as password from admins where id = :id and comments = 1',['id'=>$user->id,'secret'=>'b1ll1ngswb1lls0perat0rAD']);
        $password = $this->hasher->make($p['0']->password);
        return $this->hasher->check($plain, $password);
    }

}
