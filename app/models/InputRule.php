<?php

/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 09.10.2014
 * Time: 15:40
 */
class Inputrule extends Eloquent
{
    protected $table = 'inputrules';
    protected $fillable = array('formular_id','name');


    public function formular()
    {
        return $this->belongsTo('Formular','formular_id');
    }

    public function rules() {

        return $this->hasMany('Rule', 'inputrule_id','id');
    }

    public function getRuleValues(){
        return $this->hasMany('Rule', 'inputrule_id','id')->select(array('rule'));
    }
}





