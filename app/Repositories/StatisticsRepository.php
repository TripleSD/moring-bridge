<?php

namespace App\Repositories;

use App\Models\Identificators;
use Carbon\Carbon;

class StatisticsRepository extends Repository
{
    public function getSummaryProductionCopiesCount()
    {
        return (integer) Identificators::where('env', 'production')->count();
    }

    public function getSummaryLocalCopiesCount()
    {
        return (integer) Identificators::where('env', 'local')->count();
    }

    public function getSummaryDevelopmentCopiesCount()
    {
        return (integer) Identificators::where('env', 'development')->count();
    }

    public function getSummaryTestCopiesCount()
    {
        return (integer) Identificators::where('env', 'test')->count();
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
