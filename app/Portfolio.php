<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function portfolio_categories(){
        return $this->belongsTo('App\PortfolioCategory', 'id');
    }
}
