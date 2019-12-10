<?php

namespace App\Repositories;

use App\Models\StatisticsIdentificators;
use Carbon\Carbon;

class StatisticsIdentificatorsRepository extends Repository
{
    public function getSummaryCopiesCount()
    {
        return (integer)StatisticsIdentificators::all()->count();
    }

    public function getActiveCopiesCount()
    {
        return (integer)StatisticsIdentificators::whereBetween(
            'updated_at',
            [
                Carbon::now()->startOfDay(),
                Carbon::now()->endOfDay()
            ]
        )->count();
    }
}
