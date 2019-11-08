<?php

namespace App\Repositories;

class InfoMethodsRepository extends Repository
{
    public function getInfo()
    {
        return array(
            'php' => array(
                '7' =>
                    array(
                        'versions' => [
                            'request' => env('APP_URL').'/v1/get/php/7/versions',
                            'description' => 'About PHP versions',
                        ]
                    ),
                '5' =>
                    array(
                        'versions' => [
                            'request' => env('APP_URL').'/v1/get/php/5/versions',
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
