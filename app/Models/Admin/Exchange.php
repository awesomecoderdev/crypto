<?php

namespace App\Models\Admin;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\ProcessUploadExchangesIcon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exchange extends Model
{
    use HasFactory, Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "exchanges_id",
        "name",
        "slug",
        "logo",
        "country",
        "description",
        "year_established",
        "url",
        "image",
        "has_trading_incentive",
        "trust_score",
        "trust_score_rank",
        "trade_volume_24h_btc",
        "trade_volume_24h_btc_normalized",
    ];


    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function icon()
    {

        // if ($this->image == null || empty($this->image)) {
        //     $file = "img/unknown.png";
        //     return asset($file);
        // }

        $ext = File::extension($this->image);
        $file = "icon/exchanges/{$this->slug}.{$ext}";
        $path = public_path($file);

        if (File::exists($path)) {
            return asset($file);
        } else {
            if (!File::isDirectory(public_path("icon/exchanges/"))) {
                File::makeDirectory((public_path("icon/exchanges/")), 0777, true, true);
            }
            ProcessUploadExchangesIcon::dispatch($this);
        }
        return $this->image;
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function logo(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->icon(),
            set: fn ($value) => ($this->image == null || empty($this->image)) ? asset("img/unknown.png") : $value,
        );
    }
    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function image(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => substr($value, 0, strpos($value, '?')),
        );
    }
}
