<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // public static function getAllOrderByUpdated_at()
    // {
    //     return self::orderBy('updated_at', 'desc')->get();
    // }

    public function mylikes()
    {
        return $this->hasMany(Like::class);
    }



    // public $primaryKey = 'id';

    // public $timestamps = true;

    // protected $fillable = [
    //     'customer_name',
    //     'sex',
    //     'age',
    //     'checkbox',
    //     'description',
    // ];
}
