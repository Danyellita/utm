<?php

use Illuminate\Database\Seeder;
use App\Sector;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sector = Sector::create([
        	'name'  => 'Buiucani',
            'population' => '109.2',
            'lat' => '47.003670',
            'lang'=>'28.907089',
        ]);
        $sector = Sector::create([
        	'name'  => 'Centru',
            'population' => '95.2',
            'lat' => '47.003670',
            'lang'=>'28.907089',
        ]);
        $sector = Sector::create([
        	'name'  => 'Riscani',
            'population' => '145.5',
            'lat' => '47.003670',
            'lang'=>'28.907089',
        ]);
        $sector = Sector::create([
        	'name'  => 'Botanica',
            'population' => '172.4',
            'lat' => '47.003670',
            'lang'=>'28.907089',
        ]);
        $sector = Sector::create([
        	'name'  => 'Ciocana',
            'population' => '116.8',
            'lat' => '47.003670',
            'lang'=>'28.907089',
        ]);
    }
}
