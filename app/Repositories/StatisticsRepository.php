<?php

namespace App\Repositories;

use App\Models\Identificators;
use Carbon\Carbon;

class StatisticsRepository extends Repository
{
    public function getSummaryCopiesCount()
    {
        return (integer) Identificators::where('env', 'production')->count();
    }

    public function getActiveCopiesCount()
    {
        return (integer) Identificators::whereBetween(
            'updated_at',
            [
                Carbon::now()->startOfDay(),
                Carbon::now()->endOfDay()
            ]
        )->count();
    }
}
