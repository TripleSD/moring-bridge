<?php

namespace App\Http\Controllers\Api\Identificators;

use App\Http\Controllers\Controller;
use App\Repositories\IdentificatorsRepository;
use Illuminate\Http\Request;
use Response;

class IdentificatorsInfoController extends Controller
{
    private $identificatorsRepository;

    public function __construct()
    {
        $this->identificatorsRepository = new IdentificatorsRepository();
    }

    public function createIdentificator(Request $request)
    {
        return Response::json(
            $this->identificatorsRepository->createIdentificator($request),
            200,
            ['Content-Type' => 'application/json;charset=utf8'],
            JSON_UNESCAPED_SLASHES
        );
    }

    public function checkIdentificator(Request $request)
    {
        return $this->identificatorsRepository
            ->checkIdentificator($request->input('identificator'));
    }
}
