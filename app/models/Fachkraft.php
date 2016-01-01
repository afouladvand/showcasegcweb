<?php
/**
 * Created by IntelliJ IDEA.
 * User: ChanD
 * Date: 09.10.2014
 * Time: 15:39
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Fachkraft extends Eloquent
{
    protected $table = 'fachkrafte';
    protected $primaryKey = 'id';
    protected $fillable = array('installateur_id', 'vorname', 'nachname');

    public function installateur()
    {
        return $this->belongsTo('Installateur');
    }
}