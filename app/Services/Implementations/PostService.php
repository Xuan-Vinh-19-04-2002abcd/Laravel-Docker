<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IPostRepository;
use App\Services\Interfaces\IPostService;

class PostService implements IPostService {
    public function __construct(
        private readonly IPostRepository $postRepository
    )
    {}

    public function createPost(array $data): array
    {

        $abc = $this->postRepository->create($data);


        return [];
    }
    public function getAllPosts(): array
    {
        return $this->postRepository->all($toArray = true);
    }
        
}