<?php

namespace App\Repositories;

class InfoMethodsRepository extends Repository
{
    public function getInfo()
    {
        return array(
            'bridge' => array(
                'version' => array(
                    'request' => env('APP_URL').'/v1/get/bridge/version',
                    'method' => 'GET',
                    'description' => 'Bridge current version',
                ),
            ),
            'moring' => array(
                'version' => array(
                    'request' => env('APP_URL').'/v1/get/moring/version',
                    'method' => 'GET',
                    'description' => 'Moring current version',
                ),
            ),
            'php' => array(
                '7' =>
                    array(
                        'versions' => [
                            'request' => env('APP_URL').'/v1/get/php/7/versions',
                            'method' => 'GET',
                            'description' => 'About PHP versions',
                        ]
                    ),
                '5' =>
                    array(
                        'versions' => [
                            'request' => env('APP_URL').'/v1/get/php/5/versions',
                            'method' => 'GET',
                            'description' => 'About PHP versions',
                        ]
                    )
            ),
            'centos' => array(
                'versions' => [
                    'desc' => 'Info Centos',
                    'request' => env('APP_URL').'/v1/get/centos/versions',
                ]
            )
        );
    }
}
