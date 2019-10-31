<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Arr;
class Transaction extends Model
{
    protected $table = 'transaction';
    protected $guarded = [''];
    public $timestamps = false;

    protected $status = [
        1 => [
            'name' => 'Đã xử lý',
            'class'=> 'label-success'
        ],
        0 =>[
            'name' =>'Chờ xử lý',
            'class'=>'label-danger'
        ]
    ];

    public function getStatus(){
        return Arr::get($this->status,$this->t_active, '[N\A]');
    }

    public function transactionList(){
        $transactions = Transaction::orderBy('id','DESC')->get();
        return $transactions;
    }

    public function actionId($action, $id){
        if($action)
        {
            $transactions = Transaction::find($id);
            switch ($action){
                case 'delete':
                    $transactions->delete();
                    $msgTransaction = 'Xóa đặt phòng thành công';
                    break;
                case 'active':
                    $transactions->t_active = $transactions->t_active ? 0 : 1;
                    $msgTransaction = 'Cập nhặt đặt phòng thành công';
                    $transactions->save();
                    break;
            }
        }
        return  $msgTransaction;
    }
}
