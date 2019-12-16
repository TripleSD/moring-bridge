<?php

namespace App\Http\Controllers\Api\Bridge;

use App\Http\Controllers\Controller;
use App\Repositories\BridgeInfoRepository;
use App\Repositories\IdentificatorsRepository;
use Illuminate\Http\Request;
use Response;

class BridgeInfoController extends Controller
{
    private $identificatorsRepository;

    public function __construct()
    {
        $this->identificatorsRepository = new IdentificatorsRepository();
    }

    public function getCurrentVersion(Request $request, BridgeInfoRepository $repository)
    {
        $identificator = $this->identificatorsRepository->checkIdentificator($request->input('identificator'));

        if ($identificator != null) {
            return Response::json(
                $repository->getCurrentVersion(),
                200,
                ['Content-Type' => 'application/json;charset=utf8'],
                JSON_UNESCAPED_SLASHES
            );
        } else {
            return Response::json(
                'Identificator Error',
                200,
                ['Content-Type' => 'application/json;charset=utf8'],
                JSON_UNESCAPED_SLASHES
            );
        }
    }
}
