<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    public function articles() {
        $this->hasmany('App\Articles');
    }
}
