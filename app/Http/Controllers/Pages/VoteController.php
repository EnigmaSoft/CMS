<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoteController extends Controller
{
    /**
     * Show the Vote page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // vote settings to be added
        /*$votesbyname = Vote::where('account', $username)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();

        $votesbyip = Vote::where('ip', $userip)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();

        //dd(count($votesbyname));

        if (count($votesbyname) === 0) {
            $byname = false;
        }
        if (count($votesbyip) === 0) {
            $byip = false;
        }

        if (!$byname && !$byip) {
            $lastvote = 'Never';
        }
        else {

        }*/


        //$lastvote = strtotime($votesbyip->date) > strtotime($votesbyname->date) ? $votesbyip->date : $votesbyname->date;

        /*$time = strtotime('-6 hour');

        $lastvote = null;
        if (strtotime($votesbyname->date) < $time && strtotime($votesbyip->date) < $time) {
            # code...
        }*/
        
        return view('theme::pages.vote');
    }
}
