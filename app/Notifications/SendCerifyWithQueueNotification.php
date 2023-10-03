<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCerifyWithQueueNotification extends VerifyEmail implements ShouldQueue
{
    use Queueable;


}
