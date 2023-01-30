<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IPostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        private readonly IPostService $postService
    )
    {}
    public function createPost(Request $request)
    {
        $data = $request->all();
        $result = $this->postService->createPost((array)$data);
        return response()->json([
            "message" => "Create Successfully"
        ]);
    }
    public function getAllPosts()
    {
        return response()->json(
            [
                "message" => "Successfully",
                "data" => $this->postService->getAllPosts()
            ]
        );
    }
}
