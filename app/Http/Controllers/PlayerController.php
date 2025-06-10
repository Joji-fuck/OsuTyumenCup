<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Services\OsuService;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    private $osuService;

    public function __construct(OsuService $osuService)
    {
        $this->osuService = $osuService;
    }

    public function index()
    {
        $players = Player::where('is_banned', 0)->get();
        $stats = $this->osuService->getMultiplePlayersStats($players);
        $title = 'Игроки Osu Tyumen Cup 2025';
        return view('players', compact('title', 'stats'));
    }
}
