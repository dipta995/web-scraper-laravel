<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function website()
    {
        return $this->belongsTo('App\Models\Website', 'website_id');
    }
}
