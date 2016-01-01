<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 10.10.2014
 * Time: 14:14
 */

class deleteTables extends Seeder {
    public function run(){
       // DB::table('users')->delete();
       // DB::table('installateure')->delete();
        //DB::table('fachkrafte')->delete();
        DB::table('formulare')->truncate();
        DB::table('inputrules')->truncate();
    }

} 