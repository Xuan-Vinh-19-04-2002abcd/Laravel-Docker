<?php
namespace App\Services\Interfaces;

interface IPostService{
    public function createPost(array $data): array;
    public function getAllPosts(): array;
  
}