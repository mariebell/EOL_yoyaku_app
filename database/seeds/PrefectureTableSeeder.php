<?php

use Illuminate\Database\Seeder;

class PrefectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $http = new \GuzzleHttp\Client();

        $options= ['headers' => [
            'X-API-KEY' => config('my.resas_api_key')
        ]];
        $response = $http->request('GET', config('my.resas_api_url'), $options);

        dd(json_decode($response->getBody()));
        exit;

        $prefectures = [];
        $now = \Carbon\Carbon::now();

    }
}
