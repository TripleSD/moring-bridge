<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\Bridge\BridgeLogsController;
use Closure;

class BridgeLogs
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @param $next
     * @return string
     */
    public function handle($request, Closure $next)
    {
        $string = new BridgeLogsController();
        $string->save($request);
        return $next($request);
    }
}
