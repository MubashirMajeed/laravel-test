<?php

namespace App\Listeners;

use App\Events\TaskCreated;
use App\Mail\TaskCreatedMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTaskCreatedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TaskCreated $event)
    {
        Log::info('Task created: ' . $event->task->title);
        
        Mail::to(Auth::user()->email)->send(new TaskCreatedMail($event->task));
    }
}
