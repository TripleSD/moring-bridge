<?php

namespace App\Repositories;

use Config;

class BridgeInfoRepository extends Repository
{
    public function getCurrentVersion()
    {
        return (integer) Config::get('moring.build');
    }
}
