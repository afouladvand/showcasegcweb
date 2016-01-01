<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 10.10.2014
 * Time: 10:34
 */
class InstallateurTableSeeder extends Seeder {
    public function run()
    {
        Eloquent::unguard();
        $users = DB::table('users')->get();
        $faker = Faker\Factory::create('de_DE');
        foreach ($users as $user)
        {
            $inst = Installateur::firstOrNew(["user_id" => $user->id]);
            $inst->installNr = $faker->ean8;
            $inst->firmenName = $faker->company;
            $inst->strasse = $faker->streetName;
            $inst->strNr = $faker->buildingNumber;
            $inst->plz = $faker->postcode;
            $inst->ort = $faker->city;
            $inst->telefon = $faker->phoneNumber;
            $inst->fax = $faker->phoneNumber;
            $inst->save();
        }
    }
}