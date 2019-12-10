<?php

namespace App\Repositories;

use Config;

class BridgeInfoRepository extends Repository
{
    public function getCurrentVersion()
    {
        return (string) Config::get('moring.build');
    }
}
