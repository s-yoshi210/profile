<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    // Skillへの関連を定義
    public function skills()
    {
        return $this->hasMany('App\Models\Skill', 'categorie_id');
    }
}
