<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public mixed $title;
    /**
     * @var int|mixed
     */
    public mixed $page_number;
    public mixed $annotation;
    protected $fillable = [
        'title', 'page_number', 'annotation' ,'status',
    ];

   /* protected $casts = [
        'status' => ProductStatus::class,
    ];*/



}
