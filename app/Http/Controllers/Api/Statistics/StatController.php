<?php

namespace App\Http\Controllers\Api\Statistics;

use Carbon\Carbon;
use App\Models\StatisticsVersions;
use App\Http\Controllers\Controller;
use App\Repositories\IdentificatorsRepository;
use App\Repositories\PHPVersionsRepository;
use Illuminate\Http\Request;

class StatController extends Controller
{
    private $identificatorsRepository;

    public function __construct()
    {
        $this->identificatorsRepository = new IdentificatorsRepository();
    }

    public function updateVersion(Request $request, PHPVersionsRepository $repository)
    {
        $currentVersion = StatisticsVersions::where('identificator', $request->input('identificator'))
            ->where('version', $request->input('version'))->get();

        if ($currentVersion->count() === 0) {
            StatisticsVersions::create(
                ['identificator' => $request->input('identificator'), 'version' => $request->input('version')]
            );
        }
    }
}
