<?php

namespace App\Http\Controllers\Api\Php;

use App\Http\Controllers\Controller;
use App\Repositories\PHPVersionsRepository;
use Illuminate\Support\Facades\Response;


class PhpInfoController extends Controller
{
    public function getActualVersions(PHPVersionsRepository $repository)
    {
        return Response::json($repository->getVersions(), 200,
            array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_SLASHES);
    }
}