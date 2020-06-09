<?php

namespace App\Models;

use App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    public function category()
    {
        //Categoryモデルのデータを引っ張ってくる
        return $this->hasOne('App\Models\Category', 'id', 'categorie_id');
    }
}
