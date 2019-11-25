<?php

namespace App\Http\Controllers\Api\Bridge;

use App\Http\Controllers\Controller;
use App\Repositories\BridgeLogsRepository;

class BridgeLogsController extends Controller
{
    public function save($request)
    {
        $string = new BridgeLogsRepository();
        $string->save($request);
    }
}