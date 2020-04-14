<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            'url' => 'https://shitoto.com/2020/04/13/the-types-of-people-on-facebook/',
            'title' => 'THE TYPES OF PEOPLE ON FACEBOOK.',
            'score_point' => 512,
        ]);

        DB::table('links')->insert([
            'url' => 'https://shitoto.com/2020/04/12/tales-by-moonlight-how-she-disvirgined-me-pt-2/',
            'title' => 'Tales By Moonlight: How She Disvirgined Me (Pt. 2)',
            'score_point' => 512,
        ]);

        DB::table('links')->insert([
            'url' => 'https://shitoto.com/2020/04/12/plateau-state-government-includes-farmers-to-essential-providers-list/',
            'title' => 'Plateau State Government includes Farmers to essential providers List',
            'score_point' => 512,
        ]);

        DB::table('links')->insert([
            'url' => 'https://shitoto.com/2020/04/11/covid-19-202-persons-arrested-for-violating-stay-at-home-order/',
            'title' => 'COVID-19: 202 persons arrested for violating stay-at-home order',
            'score_point' => 512,
        ]);
    }
}
