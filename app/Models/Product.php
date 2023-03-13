<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //  public $timestamps=false;

    // protected $primaryKey = 'id';
     protected $fillable = [
        'name',
        'categories',
        'description',
        'price',
        'image'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categories');
    }


}
