<?php

namespace App\Http\Controllers\Api\Identificators;

use App\Http\Controllers\Controller;
use App\Repositories\IdentificatorsRepository;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    private $identificatorsRepository;

    public function __construct()
    {
        $this->identificatorsRepository = new IdentificatorsRepository();
    }

    public function createIdentificator(Request $request)
    {
        return $this->identificatorsRepository->createIdentificator($request);
    }

    public function checkIdentificator(Request $request)
    {
        return $this->identificatorsRepository->checkIdentificator($request->input('identificator'));
    }
}
