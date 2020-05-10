<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\BridgeLogsRepository;
use App\Repositories\StatisticsRepository;
use Config;

class HomeController extends Controller
{
    private $bridgeLogRepository;
    private $statisticsRepository;

    public function __construct()
    {
        $this->bridgeLogRepository  = new BridgeLogsRepository();
        $this->statisticsRepository = new StatisticsRepository();
    }

    public function getHome()
    {
        $currentVersion                = Config::get('moring.build');
        $summaryCount                  = $this->bridgeLogRepository->getSummaryCount();
        $summaryDailyCount             = $this->bridgeLogRepository->getSummaryDailyCount();
        $summaryProductionCopiesCount  = $this->statisticsRepository->getSummaryProductionCopiesCount();
        $summaryLocalCopiesCount       = $this->statisticsRepository->getSummaryLocalCopiesCount();
        $summaryDevelopmentCopiesCount = $this->statisticsRepository->getSummaryDevelopmentCopiesCount();
        $summaryTestCopiesCount        = $this->statisticsRepository->getSummaryTestCopiesCount();
        $activeCopiesCount             = $this->statisticsRepository->getActiveCopiesCount();

        return view(
            'home',
            compact(
                'summaryCount',
                'summaryDailyCount',
                'summaryProductionCopiesCount',
                'summaryLocalCopiesCount',
                'summaryDevelopmentCopiesCount',
                'summaryTestCopiesCount',
                'activeCopiesCount',
                'currentVersion'
            )
        );
    }
}
