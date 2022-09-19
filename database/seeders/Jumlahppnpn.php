<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jumlahppnpn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jumlahppnpn::insert([
            ['eselon' => 'SEKJEN', 'jumlah' => '345',],
            ['eselon' => 'ITJEN', 'jumlah' => '127',],
            ['eselon' => 'PKTL', 'jumlah' => '1115',],
            ['eselon' => 'KSDAE', 'jumlah' => '5196',],
            ['eselon' => 'PDASRH', 'jumlah' => '924',],
            ['eselon' => 'PHL', 'jumlah' => '816',],
            ['eselon' => 'PPKL', 'jumlah' => '273',],
            ['eselon' => 'PSLB3', 'jumlah' => '165',],
            ['eselon' => 'PPI', 'jumlah' => '476',],
            ['eselon' => 'PSKL', 'jumlah' => '337',],
            ['eselon' => 'GAKKUM', 'jumlah' => '1178',],
            ['eselon' => 'BP2SDM', 'jumlah' => '829',],
            ['eselon' => 'BSI', 'jumlah' => '949',],
        ]);
    }
}