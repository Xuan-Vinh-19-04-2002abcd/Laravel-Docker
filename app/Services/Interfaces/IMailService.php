<?php
namespace App\Services\Interfaces;
use App\Models\User;

interface IMailService {
    public function sendMail(User $user);
}
