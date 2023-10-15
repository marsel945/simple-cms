<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    use Sluggable;

    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'status'
    ];

    protected $dates = 'deleted_at';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    public function post()
    {
        return $this->hasMany('App\Models\Post', 'category_id');
    }
}
