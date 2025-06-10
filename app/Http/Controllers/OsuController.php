<?php

namespace App\Http\Controllers;

use App\Services\OsuService;

class OsuController extends Controller
{
    private $osuService;

    public function __construct(OsuService $osuService)
    {
        $this->osuService = $osuService;
    }

    public function show($username)
    {
        $stats = $this->osuService->getPlayerStats($username);
        return view('osu.player', compact('stats', 'username'));
    }
}
