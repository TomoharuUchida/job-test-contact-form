<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'customer_name',
        'sex',
        'age',
        'description',
    ];

    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];

    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'asc')->get();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
