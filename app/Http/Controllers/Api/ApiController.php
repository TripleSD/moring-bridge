<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\InfoMethodsRepository;
use App\Repositories\PHPVersionsRepository;

class ApiController extends Controller
{
    public function getMethods(InfoMethodsRepository $repository)
    {
        return $repository->getInfo();
    }

    public function getActualPHPVersions(PHPVersionsRepository $repository)
    {
        return $repository->getVersions();
    }
}