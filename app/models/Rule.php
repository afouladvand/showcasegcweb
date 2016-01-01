<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 06.11.2014
 * Time: 11:14
 */

class Rule extends Eloquent{

    protected $table = 'rules';
    protected $fillable = array('inputrule_id','rule');



    public function inputrule()
        {
        return $this->belongsTo('Inputrule','inputrule_id');
    }
} 