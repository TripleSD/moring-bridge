<?php

namespace App\Http\Controllers\Api\Moring;

use App\Http\Controllers\Controller;
use App\Models\StatisticsIdentificators;
use App\Repositories\MoringInfoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MoringInfoController extends Controller
{
    public function getVersions(Request $request, MoringInfoRepository $repository)
    {
        $identificators = StatisticsIdentificators::where('identificator', $request->identificator)->first();

        if ($identificators != null) {
            return Response::json($repository->getVersions(), 200,
                array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_SLASHES);
        } else {
            return Response::json(null, 200,
                array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_SLASHES);
        }
    }
}