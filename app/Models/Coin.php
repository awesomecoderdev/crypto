<?php

namespace App\Models;

use App\Jobs\ProcessUploadMonthlySperkline;
use App\Jobs\ProcessUploadNinetyDaysSperkline;
use App\Jobs\ProcessUploadSixtyDaysSperkline;
use App\Jobs\ProcessUploadSperkline;
use App\Models\Meta;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coin extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $guarded = ["*"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $primaryKey = 'slug';

    /**
     * Get the Meta associated with the user.
     */
    public function meta()
    {
        return $this->hasOne(Meta::class, "slug", "slug");
        // return $this->belongsTo(Meta::class);
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function icon()
    {
        return $this->meta->icon();
    }

    /**
     * Interact with the news isNagitive.
     *
     * @param  bool  $value
     * @return isNagitive();
     */
    public function isNagitive($value = "")
    {
        return (substr(strval($value), 0, 1) == "-") ? true : false;
    }

    /**
     * Interact with the news percentage.
     *
     * @param  string  $value
     * @return percentage();
     */
    public function percentage($value = 0)
    {
        return sprintf('%0.2f', abs($value)) . '%';
    }

    /**
     * Interact with the news sperkline.
     *
     * @param  string  $value
     * @return sperkline();
     */
    public function weeklySperkline()
    {
        $sperkline = "sperkline/coin/7d/{$this->slug}.svg";
        $path = public_path($sperkline);

        if (File::exists($path)) {
            return asset($sperkline);
        } else {
            if (!File::isDirectory(public_path("sperkline/coin/7d/"))) {
                File::makeDirectory((public_path("sperkline/coin/7d/")), 0777, true, true);
            }
            ProcessUploadSperkline::dispatch($this);
            return "https://s3.coinmarketcap.com/generated/sparklines/web/7d/2781/{$this->cmcid}.svg";
        }
    }


    /**
     * Interact with the news sperkline.
     *
     * @param  string  $value
     * @return sperkline();
     */
    public function monthlySperkline()
    {
        $sperkline = "sperkline/coin/30d/{$this->slug}.svg";
        $path = public_path($sperkline);

        if (File::exists($path)) {
            return asset($sperkline);
        } else {
            if (!File::isDirectory(public_path("sperkline/coin/30d/"))) {
                File::makeDirectory((public_path("sperkline/coin/30d/")), 0777, true, true);
            }
            ProcessUploadMonthlySperkline::dispatch($this);
            return "https://s3.coinmarketcap.com/generated/sparklines/web/30d/2781/{$this->cmcid}.svg";
        }
    }

    /**
     * Interact with the news sperkline.
     *
     * @param  string  $value
     * @return sperkline();
     */
    public function sixtyDaysSperkline()
    {
        $sperkline = "sperkline/coin/60d/{$this->slug}.svg";
        $path = public_path($sperkline);

        if (File::exists($path)) {
            return asset($sperkline);
        } else {
            if (!File::isDirectory(public_path("sperkline/coin/60d/"))) {
                File::makeDirectory((public_path("sperkline/coin/60d/")), 0777, true, true);
            }
            ProcessUploadSixtyDaysSperkline::dispatch($this);
            return "https://s3.coinmarketcap.com/generated/sparklines/web/60d/2781/{$this->cmcid}.svg";
        }
    }

    /**
     * Interact with the news sperkline.
     *
     * @param  string  $value
     * @return sperkline();
     */
    public function ninetyDaysSperkline()
    {
        $sperkline = "sperkline/coin/90d/{$this->slug}.svg";
        $path = public_path($sperkline);

        if (File::exists($path)) {
            return asset($sperkline);
        } else {
            if (!File::isDirectory(public_path("sperkline/coin/90d/"))) {
                File::makeDirectory((public_path("sperkline/coin/90d/")), 0777, true, true);
            }
            ProcessUploadNinetyDaysSperkline::dispatch($this);
            return "https://s3.coinmarketcap.com/generated/sparklines/web/90d/2781/{$this->cmcid}.svg";
        }
    }

    /**
     * Interact with the news rank.
     *
     * @param  string  $value
     * @return rank();
     */
    public function rank()
    {
        return $this->cmc_rank;
    }

    /**
     * Interact with the news rank.
     *
     * @param  string  $value
     * @return price();
     */
    public function price()
    {
        $price = isset($this->quote->USD->price) ? $this->quote->USD->price : 0;
        // return ($price >= 1) ? round($price, 2) : $price;

        if ($price >= 1) {
            return sprintf('%0.2f', $price);
        } else if ($price >= 0.1) {
            return sprintf('%0.4f', $price);
        } else if ($price > 0.01) {
            return sprintf('%0.5f', $price);
        }
        return sprintf('%f', $price);
    }

    /**
     * Interact with the news rank.
     *
     * @param  string  $value
     * @return price();
     */
    public function coinVar()
    {
        return strtolower($this->symbol) . md5(time());
    }

    /**
     * Interact with the news rank.
     *
     * @param  string  $value
     * @return price();
     */
    public function coinVal()
    {
        return strtolower($this->symbol) . "val" . md5(time());
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
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function platform(): Attribute
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
    protected function quote(): Attribute
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
    protected function maxSupply(): Attribute
    {
        return new Attribute(
            get: fn ($value) => (round($value) == 0) ? "--" : sprintf('%0.2f', round($value)),
            // set: fn ($value) => round($value),
        );
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function circulatingSupply(): Attribute
    {
        return new Attribute(
            get: fn ($value) => (round($value) == 0) ? "--" : sprintf('%0.2f', round($value)),
            // set: fn ($value) => round($value),
        );
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function totalSupply(): Attribute
    {
        return new Attribute(
            get: fn ($value) => (round($value) == 0) ? "--" : sprintf('%0.2f', $value),
            // set: fn ($value) => round($value),
        );
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function marketCap()
    {
        $quote = isset($this->quote->USD) ?  $this->quote->USD : [];
        $marketCap = isset($quote->market_cap) ? $quote->market_cap : "--";
        return ($marketCap == 0) ? "--" : sprintf('%0.2f', round($marketCap));
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function website()
    {
        $urls = $this->meta->urls;
        return isset($urls->website) ? $urls->website : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function twitter()
    {
        $urls = $this->meta->urls;
        return isset($urls->twitter) ? $urls->twitter : [];
    }


    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function facebook()
    {
        $urls = $this->meta->urls;
        return isset($urls->facebook) ? $urls->facebook : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function chat()
    {
        $urls = $this->meta->urls;
        return isset($urls->chat) ? $urls->chat : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function messageBoard()
    {
        $urls = $this->meta->urls;
        return isset($urls->message_board) ? $urls->message_board : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function explorer()
    {
        $urls = $this->meta->urls;
        return isset($urls->explorer) ? $urls->explorer : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function reddit()
    {
        $urls = $this->meta->urls;
        return isset($urls->reddit) ? $urls->reddit : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function technicalDoc()
    {
        $urls = $this->meta->urls;
        return isset($urls->technical_doc) ? $urls->technical_doc : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function sourceCode()
    {
        $urls = $this->meta->urls;
        return isset($urls->source_code) ? $urls->source_code : [];
    }

    /**
     * Interact with the news quote.
     *
     * @param  string  $value
     */
    public function announcement()
    {
        $urls = $this->meta->urls;
        return isset($urls->announcement) ? $urls->announcement : [];
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
