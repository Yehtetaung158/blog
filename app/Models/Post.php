<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    // protected $fillable = [
    //     'title',
    //     'content',
    //     // 'image',
    //     'user_id',
    //     'published_at',
    //     'updated_at',
    // ];
    // protected $dates = [
    //     'published_at',
    //     'updated_at',
    // ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
