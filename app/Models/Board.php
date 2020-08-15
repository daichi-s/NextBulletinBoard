<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'status',
        'created_at',
        'updated_at',
    ];


    public function getList()
    {
        return $this->open()->orderby('id', 'ASC')->get();
    }

    public function scopeOpen($query)
    {
        return $query->where('status', 1);
    }
}
