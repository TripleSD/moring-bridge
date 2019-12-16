<?php

namespace App\Repositories;

class InfoMethodsRepository extends Repository
{
    public function getInfo()
    {
        return [
            'bridge' => [
                'version' => [
                    'request' => env('APP_URL') . '/v1/bridge/version',
                    'method' => 'GET',
                    'data' => 'JSON (string)',
                    'description' => 'Current version of the bridge',
                ],
            ],
            'moring' => array(
                'version' => array(
                    'request' => env('APP_URL') . '/v1/moring/version',
                    'method' => 'GET',
                    'data' => 'JSON (array)',
                    'description' => 'Current version of the Moring',
                ),
            ),
            'php' => [
                'versions' => [
                    'request' => env('APP_URL') . '/v1/php/versions',
                    'method' => 'GET',
                    'data' => 'JSON (array)',
                    'description' => 'Current PHP versions',
                    'additionally' => 'https://www.php.net/eol.php | https://www.php.net/supported-versions.php',
                ],
            ],
            'statistics' => [
                'host' => [
                    'request' => env('APP_URL') . '/v1/statistics/host',
                    'method' => 'POST',
                    'data' => 'JSON (array)',
                    'description' => 'Host\'s statistic',
                ],
                'servers' => [
                    'request' => env('APP_URL') . '/v1/statistics/servers',
                    'method' => 'POST',
                    'data' => 'JSON (array)',
                    'description' => 'Monitoring servers\' statistic',
                ],
                'sites' => [
                    'request' => env('APP_URL') . '/v1/statistics/sites',
                    'method' => 'POST',
                    'data' => 'JSON (array)',
                    'description' => 'Sites\' monitoring statistic',
                ],
            ],
            'identificators' => [
                'create' => [
                    'request' => env('APP_URL') . '/v1/identificators/create',
                    'method' => 'GET',
                    'data' => 'JSON (string)',
                    'description' => 'Create identificator of copy',
                ],
            ],
        ];
    }
}
