<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlertRegisteredUser
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $request;


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $this->request->session()->flash('alert-success', '<strong>Success!</strong> Your account was registered successfully!');
    }
}
