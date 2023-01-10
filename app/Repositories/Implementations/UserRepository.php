<?php

namespace App\Repositories\Implementations;

use App\Models\User;

class UserRepository extends BaseRepository implements \App\Repositories\Interfaces\IUserRepository
{

    public function getModel(): string
    {
        return User::class;
    }


    public function getInfo(string $userId): mixed
    {
        $info = $this->model->find($userId, ["id", "full_name", "email"]);
        return $info ? $info : null;
    }
}
