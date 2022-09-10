<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\ProcessUploadExchangesIcon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exchange extends Model
{
    use HasFactory;

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
            // set: fn ($value) => ($this->image == null || empty($this->image)) ? asset("img/unknown.png") : $value,
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
