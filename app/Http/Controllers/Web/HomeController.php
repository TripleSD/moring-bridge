<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\BridgeLogsRepository;
use App\Repositories\StatisticsIdentificatorsRepository;

class HomeController extends Controller
{
    private $bridgeLogRepository;
    private $statisticsRepository;

    public function __construct()
    {
        $this->bridgeLogRepository = new BridgeLogsRepository();
        $this->statisticsRepository = new StatisticsIdentificatorsRepository();
    }

    public function getHome()
    {
        $summaryCount = $this->bridgeLogRepository->getSummaryCount();
        $summaryDailyCount = $this->bridgeLogRepository->getSummaryDailyCount();
        $summaryCopiesCount = $this->statisticsRepository->getSummaryCopiesCount();
        $activeCopiesCount = $this->statisticsRepository->getActiveCopiesCount();

        return view('home', compact('summaryCount','summaryDailyCount',
        'summaryCopiesCount','activeCopiesCount'));
    }
}
