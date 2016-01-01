<?php

/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 09.10.2014
 * Time: 15:40
 */
class Formular extends Eloquent
{
    protected $table = 'formulare';
    protected $fillable = array('name');

    public function inputrules() {

        return $this->hasMany('Inputrule', 'formular_id','id');

    }

}


