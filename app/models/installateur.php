<?php

/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 09.10.2014
 * Time: 15:40
 */
class Installateur extends Eloquent
{
    protected $table = 'installateure';
    protected $primaryKey = 'id';

    // füllbare Felder

    protected $fillable = ['user_id','installNr','firmenName','strasse','strNr','plz','ort','telefon','fax'];


    public function user()
    {
        return $this->belongsTo('User');
    }
    public function fachkraft() {
        return $this->hasOne('Fachkraft');
    }

}


