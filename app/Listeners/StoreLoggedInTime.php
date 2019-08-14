<?php

namespace App\Listeners;

use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreLoggedInTime
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        // update LastWebLogin time column with current timestamp
        $event->user->lastweblogin = Carbon::now()->format('Y-m-d H:i:s');
        // update LastKnownIP IpAddress column with Request's IpAddress
        $event->user->lastwebip = request()->ip();
        // Save, storing the changes to the Database User row
        $event->user->save();
    }
}
