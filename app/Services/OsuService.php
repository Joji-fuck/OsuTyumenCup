<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OsuService
{
    private $clientId;
    private $clientSecret;
    private $accessToken;
    private $baseUrl = 'https://osu.ppy.sh/api/v2';

    public function __construct()
    {
        $this->clientId = config('services.osu.client_id');
        $this->clientSecret = config('services.osu.client_secret');
        $this->getAccessToken();
    }

    private function getAccessToken()
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->asForm()->post('https://osu.ppy.sh/oauth/token', [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'grant_type' => 'client_credentials',
            'scope' => 'public'
        ]);

        if ($response->successful()) {
            $this->accessToken = $response->json()['access_token'];
        }
    }

    public function getPlayerStats($username)
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'Authorization' => 'Bearer ' . $this->accessToken
        ])->get($this->baseUrl . '/users/' . $username);

        if ($response->successful()) {
            $data = $response->json();
            return [
                'username' => $data['username'],
                'global_rank' => $data['statistics']['global_rank'],
                'country_rank' => $data['statistics']['country_rank']
            ];
        }

        return null;
    }

    public function getMultiplePlayersStats($players)
    {
        $stats = [];

        foreach ($players as $player) {
            $username = $player->player_id; // или $player->username, $player->nickname
            $playerStats = $this->getPlayerStats($username);

            if ($playerStats) {
                $stats[] = array_merge($playerStats, [
                    'id' => $player->id,
                    'player_data' => $player
                ]);
            }
        }

        return $stats;
    }
}
