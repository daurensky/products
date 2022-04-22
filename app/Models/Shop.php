<?php

namespace App\Models;

use App\Traits\TranslatedNameTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Shop
 *
 * @property int $id
 * @property string $name_ru
 * @property string $name_kz
 * @property int $place_id
 * @property string $street
 * @property int $house
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Place $place
 * @method static \Database\Factories\ShopFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNameKz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop wherePlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place_id',
        'street',
        'house',
    ];

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
