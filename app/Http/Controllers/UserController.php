<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{

    protected static $jobs = [
        'v0' => 'Beginner',
        0 => 'Beginner',

        'v100' => 'Warrior',
        100 => 'Warrior',
            110 => 'Fighter',
                111 => 'Crusader',
                    112 => 'Hero',
            120 => 'Page',
                121 => 'White Knight',
                    122 => 'Paladin',
            130 => 'Spearman',
                131 => 'Dragon Knight',
                    132 => 'Dark knight',

        'v200' => 'Magician',
        200 => 'Magician',
            210 => 'Wizard (F/P)',
                211 => 'Mage (F/P)',
                    212 => 'Arch mage (F/P)',
            220 => 'Wizard (I/L)',
                221 => 'Mage (I/L)',
                    222 => 'Arch mage (I/L)',
            230 => 'Cleric',
                231 => 'Priest',
                    232 => 'Bishop',

        'v300' => 'Bowman',
        300 => 'Archer',
            310 => 'Hunter',
                311 => 'Ranger',
                    312 => 'Bow master',
            320 => 'Crossbowman',
                321 => 'Sniper',
                    322 => 'Marksman',

        'v400' => 'Thief',
        400 => 'Rogue',
            410 => 'Assassin',
                411 => 'Hermit',
                    412 => 'Night Lord',
            420 => 'Bandit',
                421 => 'Chief bandit',
                    422 => 'Shadower',

        'v500' => 'Pirate',
        500 => 'Pirate',
            510 => 'Brawler',
                511 => 'Marauder',
                    512 => 'Buccaneer',
            520 => 'Gunslinger',
                521 => 'Outlaw',
                    522 => 'Corsair',
                    
        'v900' => 'GM',
        900 => 'GM',
            910 => 'Super GM',

        'v99999' => 'Not Available',
        99999 => 'N/A',
    ];

    public static $beginner = [0];
    public static $warrior = [100, 110, 111, 112, 120, 121, 122, 130, 131, 132];
    public static $magician = [200, 210, 211, 212, 220, 221, 222, 230, 231, 232];
    public static $bowman = [300, 310, 311, 312, 320, 321, 322];
    public static $thief = [400, 410, 411, 412, 420, 421, 422];
    public static $pirate = [500, 510, 511, 512, 520, 521, 522];
    public static $gm = [900, 910];
    public static $na = [99999];

    public static function getUsernameById(int $id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return null;
        }
        return $user->name;
    }

    public static function VerbaliseJob(int $job)
    {
        return (string) isset(self::$jobs[$job]) ? self::$jobs[$job] : self::$jobs[0];
    }

    public static function VerbaliseClass(int $job)
    {
        $getClassId = self::GetClassIdByJobId($job);
        return (string) isset(self::$jobs['v'.$getClassId]) ? self::$jobs['v'.$getClassId] : self::$jobs['v0'];
    }

    public static function GetClassIdByJobId(int $job)
    {
        if     (000 <= $job && $job <=  99) return (int)   0;
    	elseif (100 <= $job && $job <= 199) return (int) 100;
    	elseif (200 <= $job && $job <= 299) return (int) 200;
    	elseif (300 <= $job && $job <= 399) return (int) 300;
    	elseif (400 <= $job && $job <= 499) return (int) 400;
    	elseif (500 <= $job && $job <= 599) return (int) 500;
    	elseif (900 <= $job && $job <= 999) return (int) 900;
    	else                                return (int)   0;
    }
}
