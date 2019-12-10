<?php

namespace App\Repositories;

use App\Models\BridgeLogs;
use Carbon\Carbon;

class BridgeLogsRepository extends Repository
{
    public function save($request)
    {
        $string = new BridgeLogs();
        $string->remote_addr = ip2long($request->server('REMOTE_ADDR'));
        $string->http_useragent = $request->server('HTTP_USER_AGENT');
        $string->request_uri = $request->server('REQUEST_URI');
        $string->request_method = $request->server('REQUEST_METHOD');
        $string->save();
    }

    public function getSummaryCount()
    {
        return (integer)BridgeLogs::all()->count();
    }

    public function getSummaryDailyCount()
    {
        return (integer)BridgeLogs::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])
            ->count();
    }
}
