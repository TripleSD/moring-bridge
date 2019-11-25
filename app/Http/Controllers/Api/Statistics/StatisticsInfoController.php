<?php

namespace App\Http\Controllers\Api\Statistics;

use App\Http\Controllers\Controller;
use App\Models\StatisticsIdentificators;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Ramsey\Uuid\Uuid;

class StatisticsInfoController extends Controller
{
    public function createIdentificator(Request $request)
    {
        $uuid = Uuid::uuid1();
        $identificator = new StatisticsIdentificators();
        $identificator->identificator = $uuid;
        $identificator->remote_addr = ip2long($request->server('REMOTE_ADDR'));
        $identificator->save();
        return $identificator->getAttributeValue('identificator');
    }

    public function checkIdentificator($identificator)
    {
        $identificator = StatisticsIdentificators::where('identificator', $identificator)
            ->pluck('identificator')->first();

        if($identificator != null) {
            $identificator->updated_at = Carbon::now();
        }

        return Response::json($identificator, 200,
            array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_SLASHES);
    }
}