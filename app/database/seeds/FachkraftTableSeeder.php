<?php

/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 10.10.2014
 * Time: 10:34
 */
class FachkraftTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('fachkrafte')->delete();
        Eloquent::unguard();
        $installateure = DB::table('installateure')->get();
        $faker = Faker\Factory::create('de_DE');
        foreach ($installateure as $installateur) {
            $fachkraft = Fachkraft::firstOrNew(["installateur_id" => $installateur->id]);
            $fachkraft->vorname = $faker->firstName;
            $fachkraft->nachname = $faker->name;

            $fachkraft->save();
        }
    }
}