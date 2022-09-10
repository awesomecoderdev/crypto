<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $primaryKey = 'slug';

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function author()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function thumb()
    {
        return File::exists(public_path(str_replace(asset(''), '', $this->thumbnail))) ? $this->thumbnail : 'https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-speaks-during-a-gathering-in-jalalabad-picture-id1205021905?k=6&m=1205021905&s=612x612&w=0&h=nwAH1XuZxF_H4f6LfHv-lgqtZe0h1tVFXfzhpMwFqao=';
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function tags(): Attribute
    {
        return new Attribute(
            get: fn ($value) => !empty($value) ? json_decode($value) : [],
            set: fn ($value) => (!empty($value) && is_array($value)) ? json_encode($value) : json_encode([]),
        );
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    function getRouteKeyName()
    {
        return "slug";
    }
}
