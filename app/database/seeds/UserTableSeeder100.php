<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 10.10.2014
 * Time: 10:34
 */
class UserTableSeeder100 extends Seeder {
    public function run()
    {
        Eloquent::unguard();
        $faker = Faker\Factory::create('de_DE');
        for ($i = 0; $i < 100; $i++) {
            $password = Hash::make('kiel');
            $user = User::create(array(
                'username' => $faker->unique()->userName,
                'email' => $faker->unique()->email,
                'confirmation_code' => 'wiLD48mVcRVRaIB6mvXoNPluAqbAvd',
                'password' => $password,
                'comfirmed' => 1
            ));
        }
    }
}