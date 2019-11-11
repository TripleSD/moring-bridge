<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\BridgeInfoRepository;

class BridgeInfoController extends Controller
{
    public function getIndex(BridgeInfoRepository $repository)
    {
        return json_encode(array(
            $repository->getVersion()
        ));
    }
}