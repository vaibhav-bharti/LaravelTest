<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content'
    ];
     /**
     * The roles that belong to the user.
     */
    public function website()
    {
        return $this->belongsTo(Website::class, 'website_id');
    }
}
