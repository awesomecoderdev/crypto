<?php

namespace App\Models;

use App\Models\CoinCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

class Category extends Model
{
    use HasFactory, HasJsonRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $primaryKey = 'slug';
    // select * from `categories` where exists (select * from `coins` where json_contains(`coins`.`tags`, `categories`.`slug`)  )  limit 50 offset 0

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "slug",
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    protected $casts = [
        'tags' => 'json',
    ];

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function coin()
    {
        // return $this->hasManyJson(CoinCategory::class, 'tags', "slug");
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function name()
    {
        $name = str_replace("-", " ", $this->slug);
        return ucwords($name);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function getRouteKeyName()
    {
        return "slug";
    }
}
