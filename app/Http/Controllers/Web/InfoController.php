<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\InfoMethodsRepository;
use App\Repositories\PHPVersionsRepository;
use Illuminate\Support\Facades\Response;


class InfoController extends Controller
{
    public function getMethods(InfoMethodsRepository $repository)
    {
        return Response::json(
            $repository->getInfo(),
            200,
            array('Content-Type' => 'application/json;charset=utf8'),
            JSON_UNESCAPED_SLASHES
        );
    }

    public function getActualPHPVersions(PHPVersionsRepository $repository)
    {
        return Response::json(
            $repository->getVersions(),
            200,
            array('Content-Type' => 'application/json;charset=utf8'),
            JSON_UNESCAPED_SLASHES
        );
    }
}
