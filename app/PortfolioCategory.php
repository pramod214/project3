<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    public function portfolio(){
        return $this->hasMany(Portfolio::class);
    }
}
