<?php

use App\Models\Billing\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    $uids = Storage::get('sol-21-26-KTV-PAUSE.txt');
    $uids = explode("\r\n\r\n",$uids);
    foreach ($uids as $uid){
        $uids2[] = trim($uid,'"');
    }
//    foreach ($uids as $uid) {
//        $user = User::find($uid);
//        dump($user->id);
//        $fees = DB::connection('billing')
//            ->table('fees')
//            ->where('bill_id',$user->bill_id)
//            ->whereDate('date','>',$date)
//            ->get();
//        $bill = DB::connection('billing')
//            ->table('bills')
//            ->where('id',$user->bill_id)
//            ->first();
//        if ($fees->count() !== 0 ){
//            DB::transaction(function () use ($user, $date,$fees): void {
//                $fees2 = DB::connection('billing')
//                    ->table('fees')
//                    ->where('bill_id',$user->bill_id)
//                    ->whereDate('date','>',$date)
//                    ->delete();
//                DB::connection('billing')
//                    ->table('bills')
//                    ->where('id',$user->bill_id)
//                    ->update(['deposit' => $fees[0]->last_deposit]);
//                $file = fopen(Storage::path('fees.txt'),'a+');
//                fwrite($file,'login:'.$user->id.' date:'.$date.' fee_count:'.$fees2.' current deposit:'.($fees[0]->last_deposit? $fees[0]->last_deposit : '0')."\r\n");
//                fclose($file);
//            });
//            dump('current deposit :');
//            dump($fees[0]->last_deposit ? $fees[0]->last_deposit : 0);
//        } else {
//            dump('current deposit :');
//            dump($bill->deposit);
//        }
//    }
//    foreach ($uids as $uid) {
//        $user = User::find($uid);
//        dump($user->id);
//        DB::transaction(function () use ($user, $date,$cashBack): void {
//            $bill = \App\Models\Billing\Bill::find($user->bill_id);
//            $payment = new \App\Models\Billing\Payment();
//            $payment->date = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
//            $payment->sum = $cashBack;
//            $payment->dsc = 'компенсация за август';
//            $payment->ip = ip2long('10.71.71.77');
//            $payment->last_deposit = $bill->deposit;
//            $payment->uid  = $user->uid;
//            $payment->aid  = '2';
//            $payment->method  = '6';
//            $payment->bill_id  = $user->bill_id;
//            $payment->amount  = $cashBack;
//            $payment->reg_date  = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
//            dump($payment->save());
//        });
//    }
    foreach ($uids2 as $uid) {
        $user = User::with('tariff')->where('id','=',$uid)->first();
        $user->tariff->fill(['disable' => 3])->push();
        if ($user->tariff->tp_id === 20){
            $file = fopen(Storage::path('sol-21-26-ktv-done.txt'),'a+');
        } else {
            $file = fopen(Storage::path('sol-21-26-inet.txt'),'a+');
        }
        fwrite($file,'login:'.$user->id.' tp_id:'.$user->tariff->tp_id."\r\n");
        fclose($file);
        dump($user);
    }
    dump($uids);
});

Auth::routes();
