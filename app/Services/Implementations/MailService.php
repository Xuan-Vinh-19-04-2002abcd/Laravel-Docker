<?php

namespace App\Services\Implementations;

use App\Mail\ResetPassWordMail;
use App\Models\User;
use App\Services\Interfaces\IMailService;
use Illuminate\Support\Facades\Mail;

class MailService implements IMailService {
    public function sendMail(User $user)
    {
        $resetMail = new ResetPassWordMail($user);
        Mail::to($user->email)->send($resetMail);
        return;
    }
}