<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $primaryKey = 'payment_id';

    protected $table = 'payments';

    protected $fillable = [
        'user_id',
        'rental_id',
        'payment_type',
        'paid_by',
        'transfee',];
}