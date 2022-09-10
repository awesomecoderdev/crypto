<?php

namespace App\Models;

use App\Jobs\ProcessUploadMetaIcon;
use App\Models\Coin;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "cmcid",
        "urls",
        "contract_address",
        "logo",
        "slug",
        "description",
        "notice",
        "date_added",
        "date_launched",
        "category",
        "self_reported_tags",
        "is_hidden",
    ];

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function cmcid(): Attribute
    {
        return new Attribute(
            // get: fn ($value) => intval($value),
            set: fn ($value) => intval($value),
        );
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function urls(): Attribute
    {
        return new Attribute(
            get: fn ($value) => !empty($value) ? json_decode($value) : [],
            set: fn ($value) => (!empty($value) && is_array($value)) ? json_encode($value) : json_encode([]),
        );
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function icon()
    {
        $ext = File::extension($this->logo);
        $file = "icon/coin/{$this->slug}.{$ext}";
        $path = public_path($file);

        if (File::exists($path)) {
            return asset($file);
        } else {
            if (!File::isDirectory(public_path("icon/coin/"))) {
                File::makeDirectory((public_path("icon/coin/")), 0777, true, true);
            }
            ProcessUploadMetaIcon::dispatch($this);
            return $this->logo;
        }
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function contractAddress(): Attribute
    {
        return new Attribute(
            get: fn ($value) => !empty($value) ? json_decode($value) : [],
            set: fn ($value) => (!empty($value) && is_array($value)) ? json_encode($value) : json_encode([]),
        );
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function selfReportedTags(): Attribute
    {
        return new Attribute(
            get: fn ($value) => !empty($value) ? json_decode($value) : [],
            set: fn ($value) => (!empty($value) && is_array($value)) ? json_encode($value) : json_encode([]),
        );
    }

    /**
     * Get the coin that owns the phone.
     *
     * @var array<int, string>
     */
    public function coin()
    {
        return $this->belongsTo(Coin::class, "slug", "slug");
    }
}
