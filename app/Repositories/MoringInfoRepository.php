<?php

namespace App\Repositories;

use App\Models\MoringVersions;

class MoringInfoRepository extends Repository
{
    public function getVersions()
    {
        return MoringVersions::pluck('version','human_version');
    }
}
