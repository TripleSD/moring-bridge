<?php

namespace App\Http\Controllers\Api\Moring;

use App\Http\Controllers\Controller;
use App\Repositories\MoringInfoRepository;
use Illuminate\Support\Facades\Response;

class MoringInfoController extends Controller
{
    public function getVersions(MoringInfoRepository $repository)
    {
        return Response::json($repository->getVersions(), 200,
            array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_SLASHES);
    }
}