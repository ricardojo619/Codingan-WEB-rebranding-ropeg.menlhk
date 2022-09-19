<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jumlahasn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jumlahasn::insert([
            ['eselon' => 'SEKJEN', 'jumlah' => '845',],
            ['eselon' => 'ITJEN', 'jumlah' => '197',],
            ['eselon' => 'PKTL', 'jumlah' => '1315',],
            ['eselon' => 'KSDAE', 'jumlah' => '6196',],
            ['eselon' => 'PDASRH', 'jumlah' => '1524',],
            ['eselon' => 'PHL', 'jumlah' => '816',],
            ['eselon' => 'PPKL', 'jumlah' => '273',],
            ['eselon' => 'PSLB3', 'jumlah' => '265',],
            ['eselon' => 'PPI', 'jumlah' => '476',],
            ['eselon' => 'PSKL', 'jumlah' => '337',],
            ['eselon' => 'GAKKUM', 'jumlah' => '1178',],
            ['eselon' => 'BP2SDM', 'jumlah' => '829',],
            ['eselon' => 'BSI', 'jumlah' => '949',],
        ]);
    }
}