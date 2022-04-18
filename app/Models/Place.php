<?php

namespace App\Models;

use App\Traits\TranslatedNameTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Place
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @method static \Database\Factories\PlaceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Place newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Place query()
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereNameKz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Place whereNameRu($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 */
class Place extends Model
{
    use HasFactory, TranslatedNameTrait;

    public $timestamps = false;

    protected $fillable = [
        'name_ru',
        'name_kz',
    ];

    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }
}
