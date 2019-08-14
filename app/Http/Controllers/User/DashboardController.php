<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Vote;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CharacterController as Character;



class DashboardController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        # TODO: Merge all into an Array
        $userid = Auth::user()->id;
        $username = Auth::user()->name;
        $lastknownip = Auth::user()->lastknownip ?: 'Never';
        $lastwebip = Auth::user()->lastwebip ?: 'Never';
        $banned = Auth::user()->banned;

        $created = Auth::user()->created_at ?: 'Unknown';
        $lastupdated = Auth::user()->updated_at ?: 'Never';
        $lastgamelogin = Auth::user()->lastlogin ?: 'Never';
        $lastweblogin = Auth::user()->lastweblogin ?: 'Never';
        $gamecash = number_format(Auth::user()->paypalNX ?: 0);
        $maplepoints = number_format(Auth::user()->mPoints ?: 0);
        $votepoints = number_format(Auth::user()->votepoints ?: 0);

        $characters = (new Character)->buildCharactersQuery()->convertAttributes()->getCharacters();

        # TODO: Replace compact(...) with Array[], for clarity and readability
        return view('theme::user.dashboard')->with(compact('lastwebip', 'lastknownip', 'banned', 'created', 'lastupdated', 'lastgamelogin', 'lastweblogin', 'gamecash', 'maplepoints', 'votepoints', 'characters'));
    }
}
