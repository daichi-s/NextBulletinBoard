<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function getList()
    {
        return $this->open()->orderby('id', 'ASC')->get();
    }

    public function scopeOpen($query)
    {
        return $query->where('status', 1);
    }
}
