<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'page_number', 'annotation' ,'status',
    ];

   /* protected $casts = [
        'status' => ProductStatus::class,
    ];*/
    public static function create(array $all)
    {
    }


}
