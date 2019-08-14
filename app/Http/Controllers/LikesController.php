<?php

namespace App\Http\Controllers;

use App\Model\Likes;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    /**
     * Create a new ReplyController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt');
    }
    public function like(Reply $reply)
    {
        $reply->likes()->create(['user_id' => 1]);
    }

    public function dislike(Reply $reply)
    {
        $reply->likes()->where('user_id', 1)->first()->delete();
    }
}
