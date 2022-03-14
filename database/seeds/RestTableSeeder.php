<?php

use Illuminate\Database\Seeder;
use App\Restdata;

class RestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Yahoo Japam',
            'url' => 'https://www.yahoo.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'MSN Japam',
            'url' => 'https://www.msn.com/ja-jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
