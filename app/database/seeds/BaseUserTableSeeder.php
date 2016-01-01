<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 10.10.2014
 * Time: 10:34
 */
class BaseUserTableSeeder extends Seeder {
    public function run()
    {

        Eloquent::unguard();
        $password = Hash::make('hamburg');
        $user = User::create(array(
          'username' => 'dchan',
          'email' => 'dchan@convenis.de',
          'confirmation_code' => 'wiLD48mVcRVRaIB6mvXoNPluAqbAvd',
          'password' => $password,
          'confirmed' => 1


        ));

        $password = Hash::make('123456');
        $user = User::create(array(
          'username' => 'cpa',
          'email' => 'christian.panagiotopoulos@web.de',          
          'password' => $password,
          'confirmed' => 1

          ));
    }
}