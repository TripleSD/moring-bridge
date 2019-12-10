<?php

namespace App\Http\Controllers\Api\Php;

use App\Http\Controllers\Controller;
use App\Repositories\IdentificatorsRepository;
use App\Repositories\PHPVersionsRepository;
use Illuminate\Http\Request;
use Response;

class PhpInfoController extends Controller
{
    private $identificatorsRepository;

    public function __construct()
    {
        $this->identificatorsRepository = new IdentificatorsRepository();
    }

    public function getActualVersions(Request $request, PHPVersionsRepository $repository)
    {
        $identificator = $this->identificatorsRepository->checkIdentificator($request->input('identificator'));

        if ($identificator != null) {
            return Response::json(
                $repository->getVersions(),
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
