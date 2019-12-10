<?php

namespace App\Repositories;

use App\Models\Identificators;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;

class IdentificatorsRepository extends Repository
{
    /*
     * Создание идентификатора для API
     * Create identificator for API
     */
    public function createIdentificator($request)
    {
        $uuid = Uuid::uuid1();
        $identificator = new Identificators();
        $identificator->identificator = $uuid;
        $identificator->remote_addr = ip2long($request->server('REMOTE_ADDR'));
        $identificator->save();
        return (string)$identificator->getAttributeValue('identificator');
    }

    /*
     * Проверка идентификатора
     * Identificator's check
     */
    public function checkIdentificator($identificator)
    {
        $identificator = Identificators::where('identificator', $identificator)
            ->pluck('identificator')->first();

        if ($identificator != null) {
            Identificators::where('identificator', $identificator)->update(['updated_at' => Carbon::now()]);
        }

        return (string)$identificator;
    }
}
