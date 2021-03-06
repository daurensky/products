<?php

namespace App\Models;

use App\Traits\TranslatedNameTrait;
use App\Traits\TranslatedTitleTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\ProductCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $title_ru
 * @property string $title_kz
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereTitleKz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereTitleRu($value)
 */
class ProductCategory extends Model
{
    use HasFactory, TranslatedTitleTrait;

    protected $perPage = 30;

    protected $fillable = [
        'title_ru',
        'title_kz',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
