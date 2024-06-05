<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {   
        $url = null;

        if($request->segment(1) == 'website'){
            $url = 'website.home';
        }else{
            $url = 'admin.login';
        }
        return $request->expectsJson() ? null : route($url);
    }
}
