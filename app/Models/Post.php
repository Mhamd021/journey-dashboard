<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Like;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $fillable =
    [

        'user_id',
        'post_info',
        'post_image',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasmany(Comment::class)->with('user:id,name');
    }
    public function likes(): HasMany
    {
        return $this->hasmany(Like::class)->with('user:id,name');
    }
    // public function getLikedAttribute()
    // {
    //     $user_id = auth('sanctum')->user()->id;
    //     return  $this->likes->where('user_id',$user_id)->isNotEmpty() ;

    // }
}
