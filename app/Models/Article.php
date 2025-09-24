<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'draft',
        'archived'
    ];

     /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'archived' => false,
        'draft' => true,
    ];
}
