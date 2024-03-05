<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $aname
 * @property string $country
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $books
 * @property-read int|null $books_count
 * @method static \Illuminate\Database\Eloquent\Builder|Autor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Autor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Autor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Autor whereAname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autor whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autor whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Autor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Autor extends Model
{
    use HasFactory;

    public function books() {
        return $this->belongsToMany(Book::class);
    }
}
