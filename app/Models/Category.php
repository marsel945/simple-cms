<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'status'
    ];

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
