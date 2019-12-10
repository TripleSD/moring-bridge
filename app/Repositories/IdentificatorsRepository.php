<?php

namespace App\Repositories;

use App\Models\Identificators;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Response;

class IdentificatorsRepository extends Repository
{
    public function createIdentificator($request)
    {
        $uuid = Uuid::uuid1();
        $identificator = new Identificators();
        $identificator->identificator = $uuid;
        $identificator->remote_addr = ip2long($request->server('REMOTE_ADDR'));
        $identificator->save();
        return (string)$identificator->getAttributeValue('identificator');
    }

    public function checkIdentificator($identificator)
    {
        $identificator = Identificators::where('identificator', $identificator)
            ->pluck('identificator')->first();

        if ($identificator != null) {
            Identificators::where('identificator', $identificator)->update(['updated_at' => Carbon::now()]);
        }

        return Response::json(
            $identificator,
            200,
            ['Content-Type' => 'application/json;charset=utf8'],
            JSON_UNESCAPED_SLASHES
        );
    }

}
