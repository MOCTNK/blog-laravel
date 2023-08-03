<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function post() {
        $post = Post::find($this->post_id);
        if(is_null($post->title)) {
            return 'NULL';
        } else {
            return $post->title;
        }
    }
}
