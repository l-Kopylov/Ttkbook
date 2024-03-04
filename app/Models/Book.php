<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected  $fillable = [
        'bname',
        'bdescription'
    ];

    public function rubrics() {
        return $this->belongsToMany(Rubric::class);
    }

    public function authors() {
        return $this->belongsToMany(Autor::class);
    }
}
