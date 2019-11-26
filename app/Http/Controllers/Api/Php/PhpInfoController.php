<?php

namespace App\Http\Controllers\Api\Php;

use App\Http\Controllers\Controller;
use App\Models\StatisticsIdentificators;
use App\Repositories\PHPVersionsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class PhpInfoController extends Controller
{
    public function getActualVersions(Request $request, PHPVersionsRepository $repository)
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