<?php

namespace App\Repositories;

use App\Models\MoringVersions;

class MoringInfoRepository extends Repository
{
    public function getCurrentVersion()
    {
        return MoringVersions::get();
    }
}
