<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\MoringInfoRepository;

class MoringInfoController extends Controller
{
    public function getIndex(MoringInfoRepository $repository)
    {
        return json_encode(
            $repository->getCurrentVersion()
        );
    }
}