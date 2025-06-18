<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Services\OsuService;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    private $osuService;

    public function __construct(OsuService $osuService)
    {
        $this->osuService = $osuService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Игроки';
        $players = Player::all();
        return view('crm.players', compact('title', 'players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'player_id'=>'required|integer'
        ]);
        Player::create([
            'player_id'=>$request->player_id,
        ]);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect()->back();
    }
}
