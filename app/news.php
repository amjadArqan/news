<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function PHPSTORM_META\type;

class news extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'gametype', 'summary','content','platform','image','status','user_id'
    ];

    public function gameType(){
        return $this->belongsTo(gameType::class,'gametype','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function gameName(){
        $name = gameType::findorfail($this->gametype);
        return $name->name;
    }


}
