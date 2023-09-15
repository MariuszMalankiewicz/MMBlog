<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function scopeFilter($query, $filters)
    // {

    //     if($month = $filters['month'])
    //     {
    //         $query->whereMonth('created_at', Carbon::parse($month)->month);
    //     }
    //     else if($filters['month'] == 0)
    //     {
    //         return $query;
    //     }

    //     if($year = $filters['year'])
    //     {
    //         $query->whereYear('created_at', $year);
    //     }
    // }
}
