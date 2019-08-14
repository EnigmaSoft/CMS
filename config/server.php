<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your Game Server. This value is used when the
    | framework needs to place the server's name in a notification or
    | any other location as required by the application or its packages.
    */

    'name' => 'MapleStory',

    /*
    |--------------------------------------------------------------------------
    | Forum URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'forum_url' => 'http://forum.enigma.dev/',

    /*
    |--------------------------------------------------------------------------
    | Facebook URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'facebook' => 'https://www.facebook.com/MapleStory',

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
    | Default value and Fallback are both set to 0.5sec (500ms)
    */

    'time_limit' => 0.1,

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
    | This value is the GameServer's Login Port, which must be listened to
    | In order for your server to be reachable, if this port is used by a
    | Service, we assume it's being used by your GameServer and so it's ONLINE
    */

    'world_name' => 'Tespia',

    /*
    |--------------------------------------------------------------------------
    | Channel ID & Port
    |--------------------------------------------------------------------------
    |
    | This value is the GameServer's Login Port, which must be listened to
    | In order for your server to be reachable, if this port is used by a
    | Service, we assume it's being used by your GameServer and so it's ONLINE
    */

    'channel' => [
        1 => 8585,
        2 => 8586,
        3 => 8587,
        4 => 8588,
/*        1 => 7575,
        2 => 7576,
        3 => 7577,
        4 => 7578,*/
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

    /*
    |--------------------------------------------------------------------------
    | Game Type
    |--------------------------------------------------------------------------
    |
    | Define your server type here
    | 0 for Level-based server | 1 for Rebirth-based server
    */

    'type' => 0,

    /*
    |--------------------------------------------------------------------------
    | Game Version
    |--------------------------------------------------------------------------
    |
    | Define your GameServer version here (used as a float)
    */

    'version' => 0.62,

    /*
    |--------------------------------------------------------------------------
    | Experience Rate
    |--------------------------------------------------------------------------
    |
    | The official in-game Experience gain rate
    */

    'exprate' => 1,

    /*
    |--------------------------------------------------------------------------
    | Mesos Rate
    |--------------------------------------------------------------------------
    |
    | The official in-game Mesos drop rate
    */

    'mesorate' => 1,

    /*
    |--------------------------------------------------------------------------
    | Drop Rate
    |--------------------------------------------------------------------------
    |
    | The official in-game Drop chance rate
    */

    'droprate' => 1,

    /*
    |--------------------------------------------------------------------------
    | Client Download Link
    |--------------------------------------------------------------------------
    |
    | Define your Game Client download link
    */

    'client' => '#client',

    /*
    |--------------------------------------------------------------------------
    | Game Setup/Files Download Link(s)
    |--------------------------------------------------------------------------
    |
    | Define your Game Setup download link(s)
    */

    'setup' => [
        '#setup1',
        '#setup2',
        '#setup3',
        '#setup4',
        '#setup5',
    ],

    /*
    |--------------------------------------------------------------------------
    | Setup Type
    |--------------------------------------------------------------------------
    |
    | Define your setup type here
    | 0 for Mirrors | 1 for Parts
    */

    'setuptype' => 0,
    
    /*
    |--------------------------------------------------------------------------
    | Breadcrumb Widget Settings
    |--------------------------------------------------------------------------
    |
    | All the settings of the Breadcrumb Widget are defined here
    */
    'rankings' => [

        /*
        |--------------------------------------------------------------------------
        | Display Breadcrumb
        |--------------------------------------------------------------------------
        |
        | Set whether you want to display the Breadcrumb or not
        | Options: true|false
        */
        'perPage' => 5,
    ],
    
    /*
    |--------------------------------------------------------------------------
    | News Page Settings
    |--------------------------------------------------------------------------
    |
    | All the settings of the News Page are defined here
    */
    'news' => [

        /*
        |--------------------------------------------------------------------------
        | Display Breadcrumb
        |--------------------------------------------------------------------------
        |
        | Set whether you want to display the Breadcrumb or not
        | Options: true|false
        */
        'perPage' => 1,
    ],

    /*
    |--------------------------------------------------------------------------
    | Breadcrumb Widget Settings
    |--------------------------------------------------------------------------
    |
    | All the settings of the Breadcrumb Widget are defined here
    */
    'breadcrumb' => [

        /*
        |--------------------------------------------------------------------------
        | Display Breadcrumb
        |--------------------------------------------------------------------------
        |
        | Set whether you want to display the Breadcrumb or not
        | Options: true|false
        */
        'display' => true,

        /*
        |--------------------------------------------------------------------------
        | Breadcrumb Position
        |--------------------------------------------------------------------------
        |
        | Define where you want to place the Breadcrumb Widget
        | Options: above_nav, below_logo, below_footer
        | Example: ['above_nav', 'below_logo', 'below_footer']
        */
        'position' => ['below_footer']
    ],

];
