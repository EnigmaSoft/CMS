<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Character;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Requests\UpdateMainCharacter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;



class CharacterController extends Controller
{

    protected $characters;
    protected $character;

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $this->buildCharactersQuery();
        $this->convertAttributes();
        return view('user.main')->with(['characters' => $this->characters]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMainCharacter $request)
    {
        $status = 'character-danger';
        $message = 'Unable to update Main Character.';

        $user = Auth::user();

        $this->buildCharacterQuery($request->input('character'));
        //if ($this->character == null)
        if ($this->character->id == $user->mainchar)
        {
            $status = 'character-info';
            $message = $this->character->name.' is already set as your Main Character!';
        }
        elseif ($this->character->accountid == $user->id)
        {
            # update main character in database
            $user->mainchar = $this->character->id;
            if ($user->save())
            {
                $status = 'character-success';
                $message = $this->character->name.' was set as your new Main Character.';
            }
        }
        else
        {
            $status = 'character-danger';
            $message = 'You cannot set <strong>another User\'s</strong> Character as <strong>your own!</strong>';
            # TODO: Add a Suspicious Activity log (file/database) and log this action!
        }
        return Redirect::to(URL::previous()."#character-selection")->with($status, $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function retrieveMainCharacter()
    {
        $user = Auth::user();
        $this->buildCharacterQuery($user->mainchar);

        return $this->character;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        $alert = 'character-danger';
        $message = 'Your Default Character is not set!';
        
        if ($this->resetDefaultCharacter())
        {
            $alert = 'character-success';
            $message = 'You successfully reset your Default Character.';
        }

        return redirect()->back()->with($alert, $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetDefaultCharacter()
    {
        if (Auth::user()->mainchar !== null)
        {
            Auth::user()->mainchar = null;
            return Auth::user()->save();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buildCharacterQuery($parameter)
    {
        if ($this->character == null)
        {
            # TODO: Change the condition to support Integer Character Names (LOL was 2lazy)
            if (is_integer($parameter))
            {
                $this->character = Character::where('id', $parameter)->first();
            }
            else
            {
                $this->character = Character::where('name', $parameter)->first();
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buildCharactersQuery()
    {
        if ($this->characters == null)
        {
            $this->characters = Character::where('accountid', Auth::user()->id)
                ->orderBy('createdate', 'asc')
                ->orderBy('id', 'asc')
                ->orderBy('level', 'desc')
                ->orderBy('exp', 'desc')
                ->get();
        }

        return $this;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function convertAttributes()
    {
        foreach ($this->characters as $character)
        {
            # TODO: Remove Attribute Conversion due to the risk of overriding
            # the original Data within the Database due to human error/bug
            $character->vjob = UserController::VerbaliseJob($character->job);
            $character->vexp = number_format($character->exp);
        }
        
        return $this;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $alert = 'alert-danger';
        $message = 'Disabled feature!';

        /*$record = News::where('slug', $slug)->first();
        if ($record != null)
        {
            if ($record->delete())
            {
                $alert = 'alert-success';
                $message = 'Article removed successfully.';
            }
        }*/

        return redirect()->back()->with($alert, $message);
    }

}
