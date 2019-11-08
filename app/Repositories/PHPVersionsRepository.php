<?php

namespace App\Repositories;

use App\Models\PHPVersions;

class PHPVersionsRepository extends Repository
{
    public function getVersions()
    {
        return PHPVersions::pluck('version','branch');
    }
}
