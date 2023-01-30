<?php

namespace App\Repositories\Implementations;

use App\Models\Post;

class PostRepository extends BaseRepository implements \App\Repositories\Interfaces\IPostRepository
{

    public function getModel(): string
    {
        return Post::class;
    }
}