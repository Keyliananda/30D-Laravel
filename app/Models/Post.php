<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title', 'body'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'tag2', 'post_id', 'user_id');
    }
}
