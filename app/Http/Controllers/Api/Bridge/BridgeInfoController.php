<?php

namespace App\Http\Controllers\Api\Bridge;

use App\Http\Controllers\Controller;
use App\Models\StatisticsIdentificators;
use App\Repositories\BridgeInfoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class BridgeInfoController extends Controller
{
    public function getCurrentVersion(Request $request, BridgeInfoRepository $repository)
    {
        $identificators = StatisticsIdentificators::where('identificator', $request->identificator)->first();

        if ($identificators != null) {
            return Response::json(
                $repository->getCurrentVersion(),
                200,
                array('Content-Type' => 'application/json;charset=utf8'),
                JSON_UNESCAPED_SLASHES
            );
        } else {
            return Response::json(
                null,
                200,
                array('Content-Type' => 'application/json;charset=utf8'),
                JSON_UNESCAPED_SLASHES
            );
        }
    }
}
