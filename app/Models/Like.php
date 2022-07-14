<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'customer_id',
        'like'
    ];

    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];

    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }

    public function kind()
    {
        return $this->belongsTo(LikeKind::class, 'like');
    }
}
