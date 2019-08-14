<?php
namespace App\Services;

use App\Informant;

class InformantService
{

    public $type = ['default', 'success', 'info', 'primary', 'warning', 'danger', 'critical'];

    public function getAll()
    {
        return Informant::where('id', '>', 0)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function getActive(bool $update = false)
    {
        if ($update)
        {
            $this->runActivityFixer();
        }

        return Informant::whereRaw('active = 1 and expire > CURTIME()')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function getActiveToFix()
    {
        return Informant::whereRaw('active = 1 and expire < CURTIME()')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function runActivityFixer()
    {
        $list = $this->getActiveToFix();

        foreach ($list as $article)
        {
            $article->active = 0;
            $article->save();
        }
    }

    public function getLastest()
    {
        return Informant::where('id', '>', 0)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function getById($id = '')
    {
        return Informant::where('id', $id)
            ->limit(1)
            ->get();
    }
}
