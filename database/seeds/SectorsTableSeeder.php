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
            'lat' => '47.037747',
            'lang'=> '28.813244',
        ]);
        $sector = Sector::create([
        	'name'  => 'Centru',
            'population' => '95.2',
            'lat' => '47.017906',
            'lang'  =>  '28.841286',
        ]);
        $sector = Sector::create([
        	'name'  => 'Riscani',
            'population' => '145.5',
            'lat' => '47.044444',
            'lang'  =>  '28.861667',
        ]);
        $sector = Sector::create([
        	'name'  => 'Botanica',
            'population' => '172.4',
            'lat' => '46.9825',
            'lang'  => '28.861944',
        ]);
        $sector = Sector::create([
        	'name'  => 'Ciocana',
            'population' => '116.8',
            'lat' => '47.036111',
            'lang' => '28.889722',
        ]);
    }
}
