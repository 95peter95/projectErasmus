<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                'titul1'=>"Mgr.",
                'meno'=>"Pavol",
                'priezvisko'=>"Vakoš",
                'titul2'=>"",
                'email'=>"pvakos@ukf.sk",
                'telefon'=>"+421 37 6408 120",
            ]
        );


        DB::table('contacts')->insert(
            [

                'titul1'=>"Ing.",
                'meno'=>"Silvia",
                'priezvisko'=>"Hrozenská",
                'titul2'=>"PhD.",
                'email'=>"shrozenska@ukf.sk",
                'telefon'=>"+421 37 6408 035",
            ]
        );


        DB::table('contacts')->insert(
            [

                'titul1'=>"Ing.",
                'meno'=>"Katarína",
                'priezvisko'=>"Butorová",
                'titul2'=>"PhD.",
                'email'=>"kbutorova@ukf.sk",
                'telefon'=>"+421 37 6408 031",
            ]
        );

        DB::table('contacts')->insert(
            [

                'titul1'=>"Ing.",
                'meno'=>"Anita",
                'priezvisko'=>"Garajová",
                'titul2'=>"PhD.",
                'email'=>"agarajova@ukf.sk",
                'telefon'=>"+421 37 6408 031",
            ]
        );

    }
}
