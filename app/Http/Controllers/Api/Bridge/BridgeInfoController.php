<?php

namespace App\Http\Controllers\Api\Bridge;

use App\Http\Controllers\Controller;
use App\Repositories\BridgeInfoRepository;
use Illuminate\Support\Facades\Response;


class BridgeInfoController extends Controller
{
    public function getCurrentVersion(BridgeInfoRepository $repository)
    {
        return Response::json($repository->getCurrentVersion(), 200,
            array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_SLASHES);
    }
}