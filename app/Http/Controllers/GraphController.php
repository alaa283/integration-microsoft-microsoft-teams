<?php

namespace App\Http\Controllers;

use App\Graph;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    function _microsoft()
    {
        $authUrl = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize';
        $query   = http_build_query([
            'client_id'     => config('services.microsoft.client_id'),
            'client_secret' => config('services.microsoft.client_secret'),
            'response_type' => 'code',
            'redirect_uri'  => secure_url('/login-redirect'),
            'scope'         => 'User.Read offline_access'
        ]);

        return redirect()->away($authUrl . '?' . $query);
    }

    function _microsoft_teams()
    {
        $authUrl = 'https://teams.live.com/meet/9429061919410';
        $query   = http_build_query([
            'application_id'     => config('services.microsoft_teams.application_id'),
            'object_id' => config('services.microsoft_teams.object_id'),
            'response_type' => 'code',
            'redirect_uri'  => secure_url('/login-redirect'),
            'scope'         => 'User.Read offline_access'
        ]);
    
        return redirect()->away($authUrl . '?' . $query);
    }
}
