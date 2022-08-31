<?php

namespace App\Listeners;

use App\Events\NewUserCreated;
use App\Models\Department;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewUserCreated  $event
     * @return void
     */
    public function handle(NewUserCreated $event)
    {
        $department = Department::all()->random();
        $department->users()->attach($event->user->id);
    }
}
