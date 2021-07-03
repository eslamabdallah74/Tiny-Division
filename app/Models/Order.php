<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Order extends Model
{
    use HasFactory;
    const ApproveStatus = 1;
    const PendingStatus = 2;
    const CanceledStatus = 3;

    protected $table = 'orders';
    protected $fillable =[
         'user_id',
         'status',
         'total',
     ];
    public function userOrder()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
