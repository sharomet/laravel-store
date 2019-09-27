<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'images',
        'public',
        'featured',
        'description',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
