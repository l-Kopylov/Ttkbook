<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $rname
 * @property string $rdescription
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $books
 * @property-read int|null $books_count
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereRdescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereRname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rubric extends Model
{
    use HasFactory;

    public function books() {
        return $this->belongsToMany(Book::class);
    }
}
