<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameType extends Model
{
    protected $table = 'game_type';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];


    public function news(){
        return $this->hasMany(news::class,'gametype' ,'id');
    }
}
