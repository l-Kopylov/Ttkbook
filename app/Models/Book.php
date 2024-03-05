<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $bname
 * @property string $bdate
 * @property string $bdescription
 * @property string $bcover
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Autor> $authors
 * @property-read int|null $authors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Rubric> $rubrics
 * @property-read int|null $rubrics_count
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBcover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBdescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
