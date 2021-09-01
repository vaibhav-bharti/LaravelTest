<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    
    /**
     * Get all of the subscribers for the post.
     */
    public function subscribers()
    {
        return $this->belongsToMany(User::class, 'subscribers');
    }

    /**
     * Get all of the subscribers for the post.
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'website_id');
    }
}
