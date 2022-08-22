<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "excerpt", "body"];
    // $guarded -> define properties not allowed to be filled

    // protected $with = ['user', 'category']; // Eager loading


    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query
                ->where('title', 'like', "%$search")
                ->orWhere('body', 'like', "%$search");
        });
        return $query;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
