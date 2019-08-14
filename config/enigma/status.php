<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Status Enabled
    |--------------------------------------------------------------------------
    |
    | Configure whether you want the website to check your GameServer's
    | Availability status, this may increase request time if the victim host's
    | Network is slow, or otherwise down
    */

    'status_enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Server Status Time Limit
    |--------------------------------------------------------------------------
    |
    | Define the time limit of the Server Status functionality in Seconds.
    | Default value and Fallback are both set to 0.1 seconds (100ms)
    */

    'time_limit' => 0.1,

    /*
    |--------------------------------------------------------------------------
    | Server Status Cache Expiry
    |--------------------------------------------------------------------------
    |
    | Define the Cache Expiration time for the Status results to be stored
    | Before requesting a Status Update.
    | 
    | Accepts: all strtotime() options
    | Default: '30 seconds'
    */

    'cache_expiry' => '10 seconds',

    /*
    |--------------------------------------------------------------------------
    | Status Display
    |--------------------------------------------------------------------------
    |
    | Define how you would like the Status to show up.
    | 
    | Accepts: [circle|label|text]
    | Default: '30 seconds'
    */

    'display' => 'circle',

    /*
    |--------------------------------------------------------------------------
    | GameServer IP
    |--------------------------------------------------------------------------
    |
    | This is the IP of the host machine where your GameServer is hosted on.
    */

    'ip' => '127.0.0.1',

    /*
    |--------------------------------------------------------------------------
    | GameServer Port
    |--------------------------------------------------------------------------
    |
    | This value is the GameServer's Login Port, which must be listened to
    | In order for your server to be reachable, if this port is used by a
    | Service, we assume it's being used by your GameServer and so it's ONLINE
    */

    'port' => 8484,

    /*
    |--------------------------------------------------------------------------
    | World Name
    |--------------------------------------------------------------------------
    |
    | This value is the GameServer's World Name.
    */

    'world_name' => 'Tespia',

    /*
    |--------------------------------------------------------------------------
    | Channel ID & Port
    |--------------------------------------------------------------------------
    |
    | This value is the GameServer's Channels and Ports, which must be listened
    | To, in order for your server to be reachable, if these ports are being
    | Used by a Service, we assume they are being used by your GameServer and
    | So they are ONLINE
    */

    'channel' => [
        1 => 7575,
        2 => 7576,
        3 => 7577,
        4 => 7578,
        5 => 7589,
        6 => 7590,
        7 => 7591,
        8 => 7592,
        9 => 7593,
        10 => 7594,
        11 => 7595,
        12 => 7596,
        13 => 7597,
        14 => 7598,
        15 => 7599,
        16 => 7600,
        17 => 7601,
        18 => 7602,
        19 => 7603,
        20 => 7604,
    ],

    /*
    |--------------------------------------------------------------------------
    | CashShop Server Port
    |--------------------------------------------------------------------------
    |
    | This value is the CashShop's Port, which must be listened to
    | In order for your server to be reachable, if this port is used by a
    | Service, we assume it's being used by your ShopServer and so it's ONLINE
    */

    'shop' => [
        1 => 8787,
    ],

];
