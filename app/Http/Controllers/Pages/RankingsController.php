<?php

namespace App\Http\Controllers\Pages;

use App\Character;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class RankingsController extends Controller
{

    /**
     * 
     * 
     */
    protected $perPage = 5;

    /**
     * 
     * 
     */
    protected $type = 'level';

    /**
     * 
     * 
     */
    protected $column = 'level';

    /**
     * 
     * 
     */
    protected $order = 'desc';

    /**
     * 
     * order: any, 1, 2, 3
     */
    protected $ranks = ['default', 'success', 'primary', 'warning'];

    /**
     * 
     * 
     */
    protected $jobs = ['beginner', 'warrior', 'magician', 'bowman', 'thief', 'pirate'];


    /**
     * 
     * 
     */
    public function __construct()
    {
        # if Server.Type is set to Rebirth, adjust Rankings settings
        if (config('server.type', 0) === 1)
        {
            $this->type = 'rebirth';
            $this->column = 'reborns';
            $this->order = 'desc';
        }
    }


    /**
     * Show the Rankings page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $title = 'Overall';

        $ranks = $this->ranks;
        $type = $this->type;
        $column = $this->column;
        $order = $this->order;


        $rank = 'rank';
        $characters = [];
        $notification = false;

        $class = '';

        $victim = null;

        ########################################################
        # VALIDATION & SECURITY                                #
        ########################################################
        # Utilize Laravel's Request rule() for validation      #
        # currently there's no validation in rankings at all   #
        # in other words - hackable xD                         #
        ########################################################
        // Do not allow any shady characters
        //'name' => 'max:13|regex:[A-Za-z0-9 ]',
        //'class' => 'in_array:$this->jobs',
;

        $name = $request->input('name');
        //$class = $request->input('class');
        
        $counter = 'rank';
        if (config('server.type', 0))
        {
            $counter = 'iteration';
        }
        

        if (!empty($name))
        {
            $victim = Character::where('name', '=', $name)->first();

            if (count($victim) === 0)
            {
                $victim = Character::where('name', 'like', $name.'%')->first();
            }

            if (count($victim) > 0)
            {
                $characters = Character::whereBetween($column, [$victim->{$column} - 2, $victim->{$column} + 2])
                    ->orderBy($column, $order)
                    ->paginate(config('server.rankings.perPage', $this->perPage));
            }

            if (count($characters) == 0)
            {
                $notification = "Could not find any character with the name \"{$name}\".";
            }
        }
        else
        {
            //$counter = 'iteration';
            $characters = Character::where('gm', '=', 0)
                ->orderBy($this->column, $this->order)
                ->paginate(config('server.rankings.perPage', $this->perPage));
        }

        $characters = $this->verbalizeClassAndJob($characters);

        return view('theme::pages.rankings')->with(compact('title', 'class', 'victim', 'characters', 'name', 'rank', 'counter', 'ranks', 'type', 'column', 'order', 'notification'))->withErrors($notification);
    }


    /**
     * Show the Rankings page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showByJob(Request $request, $class = 'beginner')
    {
        
        $title = 'Job';

        $ranks = $this->ranks;
        $type = $this->type;
        $column = $this->column;
        $order = $this->order;

        $rank = 'jobRank';
        $name = '';
        $characters = [];
        $notification = false;

        $victim = null;

        //$class = $request->input('class');
        
        $counter = 'iteration';
        if ($class !== null && in_array($class, $this->jobs))
        {
            $classJobs = User::${$class};
            // Use Character model instead
            $characters = DB::table('characters')
                ->whereBetween('job', [$classJobs[0], $classJobs[count($classJobs) - 1]])
                ->orderBy($this->column, $this->order)
                ->paginate(config('server.rankings.perPage', $this->perPage));
        }
        else
        {
            $notification = "\"".ucfirst($class)."\" is not a valid Job.";
        }

        $characters = $this->verbalizeClassAndJob($characters);

        return view('theme::pages.rankings')->with(compact('title', 'class', 'victim', 'characters', 'name', 'rank', 'counter', 'ranks', 'type', 'column', 'order', 'notification'))/*->withErrors($validator)*/;
    }


    /**
     * Show the Rankings page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showByFame(Request $request)
    {
        
        $title = 'Fame';

        $ranks = $this->ranks;
        $type = $this->type = 'fame';
        $column = $this->column = 'fame';
        $order = $this->order = 'desc';
        $counter = 'iteration';


        $rank = 'rank';
        $characters = [];
        $notification = false;
        
        $class = '';

        $victim = null;

        $name = $request->input('name');

        if (!empty($name))
        {
            $characters = Character::where('name', '=', $name)
                ->orderBy($type, $column)
                ->paginate(config('server.rankings.perPage', $this->perPage));
            if (count($characters) == 0)
            {
                $characters = $victim = Character::where('name', 'like', $name.'%')->first();
            }
            if (count($characters) == 0)
            {
                $notification = "Could not find any character with the name \"{$name}\".";
            }
        }
        else
        {
            $characters = Character::where('gm', '=', 0)
                ->orderBy($type, $order)
                ->paginate(config('server.rankings.perPage', $this->perPage));
        }

        if ($characters)
        {
            //dd($characters);
            if (count($characters) != 0 && is_a($characters, Character::class) || count($characters) != 0 && is_a($characters, LengthAwarePaginator::class))
            {
                //dd($characters);
                $characters = $this->verbalizeClassAndJob($characters);
            }
            else
            {
                $characters = $this->verbalizeClassAndJob([$characters]);
            }
        }

        if (count($characters) == 0)
        {
        //    $characters = [$characters];
        }

        return view('theme::pages.rankings')->with(compact('title', 'class', 'victim', 'characters', 'name', 'rank', 'counter', 'ranks', 'type', 'column', 'order', 'notification'))->withErrors($notification);
    }


    public function sendRedirect()
    {
        return redirect()->route('rankings');
    }


    public function verbalizeClassAndJob($characters)
    {
        foreach ($characters as $player)
        {
            if ($player !== null)
            {
                $player->class = User::VerbaliseClass($player->job);
                $player->vjob = User::VerbaliseJob($player->job);
            }
        }
        return $characters;
    }
    
}
